<?php

namespace Litwicki\Common;

/**
 * Class TimeAgo
 *
 * @package Litwicki\Common
 *          Helper functions.
 */

class TimeAgo
{
    /**
     * Give the time difference between two dates, or "now" if only one date provided.
     *
     *  @param $oldDate DateTime
     *  @param $depth int
     *  @param $now DateTime
     *
     *  @return string
     */
    public static function timeAgo(\DateTime $oldDate, $depth = 2, \DateTime $now = NULL)
    {
        try {
            if ($now == NULL) {
                $now = new \DateTime("now");
            }

            if (!is_int($depth) || $depth < 1 || $depth > 6) {
                throw new \InvalidArgumentException("Time Ago depth cannot be an integer between 1 and 6");
            }

            if ($oldDate > $now) {
                throw new \InvalidArgumentException('The comparative date cannot be greater than now.');
            }

            $difference = $now->diff($oldDate);

            $intervals = array(
                'y' => 'year',
                'm' => 'month',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'min',
                's' => 'sec'
            );

            $i = 0;
            $timeAgo = '';

            foreach ($intervals as $interval => $name) {

                if ($difference->$interval > 1) {
                    $timeAgo .= sprintf('%s %ss ', $difference->$interval, $intervals[$interval]);
                    $i++;
                }
                elseif ($difference->$interval == 1) {
                    $timeAgo .= sprintf('%s %s ', $difference->$interval, $intervals[$interval]);
                    $i++;
                }

                if ($i == $depth) {
                    break;
                }
            }

            return sprintf('%s ago', $timeAgo);
        }
        catch (\Exception $e) {
            throw new \Exception($e);
        }
    }
}