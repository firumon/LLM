<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_ = \DB::statement('SELECT @@GLOBAL.foreign_key_checks');
        \DB::statement('set foreign_key_checks = 0');
        \Milestone\Appframe\Model\ResourceActionMethod::query()
            ->create([	'id' => '2134101', 	'resource_action' => '2133101', 	'type' => 'Form', 	'idn1' => '2110101', 												])
            ->create([	'id' => '2134102', 	'resource_action' => '2133102', 	'type' => 'Form', 	'idn1' => '2110102', 												])
            ->create([	'id' => '2134103', 	'resource_action' => '2133103', 	'type' => 'Form', 	'idn1' => '2110103', 												])
            ->create([	'id' => '2134104', 	'resource_action' => '2133104', 	'type' => 'Form', 	'idn1' => '2110104', 												])
            ->create([	'id' => '2134105', 	'resource_action' => '2133105', 	'type' => 'Form', 	'idn1' => '2110105', 												])
            ->create([	'id' => '2134106', 	'resource_action' => '2133106', 	'type' => 'Form', 	'idn1' => '2110106', 												])
            ->create([	'id' => '2134107', 	'resource_action' => '2133107', 	'type' => 'Form', 	'idn1' => '2110107', 												])
            ->create([	'id' => '2134108', 	'resource_action' => '2133108', 	'type' => 'Form', 	'idn1' => '2110110', 												])
            ->create([	'id' => '2134109', 	'resource_action' => '2133109', 	'type' => 'Form', 	'idn1' => '2110111', 												])
            ->create([	'id' => '2134110', 	'resource_action' => '2133110', 	'type' => 'Form', 	'idn1' => '2110112', 												])
            ->create([	'id' => '2134111', 	'resource_action' => '2133111', 	'type' => 'Form', 	'idn1' => '2110115', 												])
            ->create([	'id' => '2134112', 	'resource_action' => '2133112', 	'type' => 'Form', 	'idn1' => '2110116', 												])
            ->create([	'id' => '2134113', 	'resource_action' => '2133113', 	'type' => 'Form', 	'idn1' => '2110120', 												])
            ->create([	'id' => '2134114', 	'resource_action' => '2133114', 	'type' => 'Form', 	'idn1' => '2110121', 												])
            ->create([	'id' => '2134115', 	'resource_action' => '2133115', 	'type' => 'Form', 	'idn1' => '2110123', 												])
            ->create([	'id' => '2134116', 	'resource_action' => '2133116', 	'type' => 'List', 	'idn1' => '2123102', 												])
            ->create([	'id' => '2134117', 	'resource_action' => '2133117', 	'type' => 'List', 	'idn1' => '2123103', 												])
            ->create([	'id' => '2134118', 	'resource_action' => '2133118', 	'type' => 'List', 	'idn1' => '2123104', 												])
            ->create([	'id' => '2134119', 	'resource_action' => '2133119', 	'type' => 'List', 	'idn1' => '2123105', 												])
            ->create([	'id' => '2134120', 	'resource_action' => '2133120', 	'type' => 'List', 	'idn1' => '2123107', 												])
            ->create([	'id' => '2134121', 	'resource_action' => '2133121', 	'type' => 'List', 	'idn1' => '2123108', 												])
            ->create([	'id' => '2134122', 	'resource_action' => '2133122', 	'type' => 'List', 	'idn1' => '2123109', 												])
            ->create([	'id' => '2134123', 	'resource_action' => '2133123', 	'type' => 'List', 	'idn1' => '2123110', 												])
            ->create([	'id' => '2134124', 	'resource_action' => '2133124', 	'type' => 'List', 	'idn1' => '2123111', 												])
            ->create([	'id' => '2134125', 	'resource_action' => '2133125', 	'type' => 'List', 	'idn1' => '2123112', 												])
            ->create([	'id' => '2134126', 	'resource_action' => '2133126', 	'type' => 'List', 	'idn1' => '2123113', 												])
            ->create([	'id' => '2134127', 	'resource_action' => '2133127', 	'type' => 'List', 	'idn1' => '2123114', 												])
            ->create([	'id' => '2134128', 	'resource_action' => '2133128', 	'type' => 'List', 	'idn1' => '2123115', 												])
            ->create([	'id' => '2134129', 	'resource_action' => '2133129', 	'type' => 'List', 	'idn1' => '2123116', 												])
            ->create([	'id' => '2134130', 	'resource_action' => '2133130', 	'type' => 'List', 	'idn1' => '2123117', 												])
            ->create([	'id' => '2134131', 	'resource_action' => '2133131', 	'type' => 'List', 	'idn1' => '2123118', 												])
            ->create([	'id' => '2134132', 	'resource_action' => '2133132', 	'type' => 'ManageRelation', 	'idn1' => '2109108', 	'idn2' => '2123103', 											])
            ->create([	'id' => '2134133', 	'resource_action' => '2133133', 	'type' => 'ManageRelation', 	'idn1' => '2109106', 	'idn2' => '2123108', 											])
            ->create([	'id' => '2134134', 	'resource_action' => '2133134', 	'type' => 'ManageRelation', 	'idn1' => '2109106', 	'idn2' => '2123108', 											])
            ->create([	'id' => '2134135', 	'resource_action' => '2133135', 	'type' => 'ManageRelation', 	'idn1' => '2109104', 	'idn2' => '2123109', 											])
            ->create([	'id' => '2134136', 	'resource_action' => '2133136', 	'type' => 'Data', 	'idn1' => '2128101', 												])
            ->create([	'id' => '2134137', 	'resource_action' => '2133137', 	'type' => 'ListRelation', 	'idn1' => '2109116', 	'idn2' => '2123103', 											])
            ->create([	'id' => '2134138', 	'resource_action' => '2133138', 	'type' => 'ListRelation', 	'idn1' => '2109109', 	'idn2' => '2123109', 											])
            ->create([	'id' => '2134139', 	'resource_action' => '2133139', 	'type' => 'ListRelation', 	'idn1' => '2109117', 	'idn2' => '2123108', 											])
            ->create([	'id' => '2134140', 	'resource_action' => '2133140', 	'type' => 'FormWithData', 	'idn1' => '2110124', 	'idn2' => '2128101', 											])
            ->create([	'id' => '2134141', 	'resource_action' => '2133141', 	'type' => 'Data', 	'idn1' => '2128102', 												])
            ->create([	'id' => '2134142', 	'resource_action' => '2133142', 	'type' => 'FormWithData', 	'idn1' => '2110105', 	'idn2' => '2128102', 											])
            ->create([	'id' => '2134143', 	'resource_action' => '2133143', 	'type' => 'Data', 	'idn1' => '2128103', 												])
            ->create([	'id' => '2134144', 	'resource_action' => '2133144', 	'type' => 'FormWithData', 	'idn1' => '2110104', 	'idn2' => '2128103', 											])
            ->create([	'id' => '2134145', 	'resource_action' => '2133145', 	'type' => 'Data', 	'idn1' => '2128104', 												])
            ->create([	'id' => '2134146', 	'resource_action' => '2133146', 	'type' => 'FormWithData', 	'idn1' => '2110106', 	'idn2' => '2128104', 											])
            ->create([	'id' => '2134147', 	'resource_action' => '2133147', 	'type' => 'ListRelation', 	'idn1' => '2109110', 	'idn2' => '2123111', 											])
            ->create([	'id' => '2134148', 	'resource_action' => '2133148', 	'type' => 'AddRelation', 	'idn1' => '2109110', 	'idn2' => '2110110', 	'idn3' => '2111133', 										])
            ->create([	'id' => '2134149', 	'resource_action' => '2133149', 	'type' => 'ListRelation', 	'idn1' => '2109142', 	'idn2' => '2123119', 											])
            ->create([	'id' => '2134150', 	'resource_action' => '2133150', 	'type' => 'AddRelation', 	'idn1' => '2109142', 	'idn2' => '2110113', 	'idn3' => '2111141', 										])
            ->create([	'id' => '2134151', 	'resource_action' => '2133151', 	'type' => 'ListRelation', 	'idn1' => '2109124', 	'idn2' => '2123120', 											])
            ->create([	'id' => '2134152', 	'resource_action' => '2133152', 	'type' => 'AddRelation', 	'idn1' => '2109124', 	'idn2' => '2110108', 	'idn3' => '2111127', 										])
            ->create([	'id' => '2134153', 	'resource_action' => '2133153', 	'type' => 'ListRelation', 	'idn1' => '2109119', 	'idn2' => '2123119', 											])
            ->create([	'id' => '2134154', 	'resource_action' => '2133154', 	'type' => 'ListRelation', 	'idn1' => '2109146', 	'idn2' => '2123121', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
