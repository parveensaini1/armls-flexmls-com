<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;


class GoogleSpreadsheetController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addsheetdata()
    {

        $rows = [
            ['1', '2', 'rahul'],
            ['4', '5', '6'],
            ['7', '8', '9'],
        ];

        $googleSheetID = env('GOOGLE_SHEET_ID');
        $sheetName=env('SHEET_NAME');

        Sheets::spreadsheet($googleSheetID)->sheet($sheetName)->append($rows);
        dd('Data Added in Sheet');
    }
}