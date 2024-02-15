<?php

use Carbon\Carbon;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use MilanTarami\NepaliCalendar\Facades\NepaliCalendar;

function getCmsConfig($label)
{
    $value = '';
    if ($label == 'cms title') {
        $con = 'title';
    } elseif ($label == 'cms logo') {
        $con = 'logo';
    }
    $data = Cookie::get($con);
    if (isset($data) || $data !== null) {
        $value = $data;
    } else {
        $data = Config::where('label', $label)->first()->value;
        $value = $data;
    }

    return $value;
}

function makeCaps($name)
{
    $words = explode(" ", $name);
    $result = '';
    foreach ($words as $index => $word) {
        if ($index > 0) {
            $result .= ' ';
        }
        $result .= ucfirst($word);
    }
    return $result;
}

function currentDate()
{
    return  Carbon::now()->toDateString();
}

function yesterdayDate()
{
    return  Carbon::yesterday()->toDateString();
}

function currentTime()
{
    return  Carbon::now()->toTimeString();
}

function convertToAmount($amount)
{
    if ($amount != 0) {

        $formattedNumber = number_format($amount, 0, '.', ',');

        return 'Rs. ' . $formattedNumber . '/-';
    }
    return '-';
}

function convertToDay($day)
{
    if ($day != 0) {
        return  $day . ' days';
    }
    return '-';
}

function noDataFound($colspan)
{
    return '<tr><th colspan=' . $colspan . ' class="text text-danger">No data found.</th></tr>';
}

function currentNepaliDate()
{
    return NepaliCalendar::today();
}

function convertToTime($time)
{
    $dateTime = Carbon::parse($time);
    $time12Hour = $dateTime->format('h:i A');
    return $time12Hour;
}

function authUser()
{
    return Auth::user();
}


function statusBadge($item, $indexUrl)
{
    return $item->status ? '<a class="badge badge-success" href="' . $indexUrl . '/change-status/' . $item->id  . '">' . 'Active' . '</a>' : '<a class="badge badge-danger" href="' . $indexUrl . '/change-status/' . $item->id  . '">' . 'Inactive' . '</a>';
}
