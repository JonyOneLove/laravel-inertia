<?php

namespace App\Imports;

use App\Models\Link;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LinksImport implements ToModel, WithHeadingRow
{

    public $team_id;
    public $project_id;
    public $contractor_id;
    public $order_id;

    public function __construct($team_id, $project_id, $contractor_id, $order_id)
    {
        $this->team_id = $team_id;
        $this->project_id = $project_id;
        $this->contractor_id = $contractor_id;
        $this->order_id = $order_id;
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Link([
            'team_id' => $this->team_id,
            'project_id' => $this->project_id,
            'contractor_id' => $this->contractor_id,
            'order_id' => $this->order_id,
            'source_url' => $row['source_url'],
            'target_url' => $row['target_url'],
        ]);
    }
}
