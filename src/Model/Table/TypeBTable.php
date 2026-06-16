<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class TypeBTable extends Table
{
    public function initialize(array $config): void
    {
        $this->belongsToMany('TypeA', [
            'through' => 'TypeATypeBLinks',
        ]);
    }
}
