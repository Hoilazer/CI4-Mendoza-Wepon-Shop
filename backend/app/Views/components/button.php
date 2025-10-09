<?php
if (!function_exists('button')) {
    function button($btnText, $btnLink = '#', $btnType = 'primary')
    {
        switch (strtolower($btnType)) {
            case 'primary':
                $colorClass = 'btn-yellow';
                break;
            case 'secondary':
                $colorClass = 'btn-blue';
                break;
            case 'tertiary':
                $colorClass = 'btn-purple'; // changed from btn-gray to btn-purple
                break;
            case 'disabled':
                return "<button class='btn btn-gray' disabled>$btnText</button>";
            default:
                $colorClass = 'btn-gray';
        }

        return "<button class='btn $colorClass' onclick=\"location.href='$btnLink'\">$btnText</button>";
    }
}
