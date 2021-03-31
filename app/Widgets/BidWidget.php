<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/11/2018
 * Time: 5:43 AM
 */

namespace App\Widgets;

use App\Models\Review;
use Klisl\Widgets\Contract\ContractWidget;


class BidWidget
{
    public $bid;

    public function __construct($data)
    {
        $this->bid = $data['bid'];
    }

    public function execute()
    {
        if (!is_null($this->bid)) {
            return view('Widgets::bid.index', ['bid' => $this->bid]);
        }
    }
}