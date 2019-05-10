<?php

    namespace Firumon\LLM\Seeder;

    namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

    class LLMRefresh extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            $_ = \DB::statement('SELECT @@GLOBAL.foreign_key_checks');
            \DB::statement('set foreign_key_checks = 0');

            \DB::statement('DELETE FROM __resources WHERE id > 2106100');
            \DB::statement('DELETE FROM __resource_roles WHERE id > 2107100');
            \DB::statement('DELETE FROM __resource_scopes WHERE id > 2108100');
            \DB::statement('DELETE FROM __resource_relations WHERE id > 2109100');
            \DB::statement('DELETE FROM __resource_forms WHERE id > 2110100');
            \DB::statement('DELETE FROM __resource_form_fields WHERE id > 2111100');
            \DB::statement('DELETE FROM __resource_form_field_data WHERE id > 2112100');
            \DB::statement('DELETE FROM __resource_form_field_options WHERE id > 2113100');
            \DB::statement('DELETE FROM __resource_form_field_attrs WHERE id > 2114100');
            \DB::statement('DELETE FROM __resource_form_field_dynamic WHERE id > 2115100');
            \DB::statement('DELETE FROM __resource_form_field_validations WHERE id > 2116100');
            \DB::statement('DELETE FROM __resource_form_field_depends WHERE id > 2117100');
            \DB::statement('DELETE FROM __resource_form_layout WHERE id > 2118100');
            \DB::statement('DELETE FROM __resource_form_data_map WHERE id > 2119100');
            \DB::statement('DELETE FROM __resource_form_defaults WHERE id > 2120100');
            \DB::statement('DELETE FROM __resource_form_collection WHERE id > 2121100');
            \DB::statement('DELETE FROM __resource_form_upload WHERE id > 2122100');
            \DB::statement('DELETE FROM __resource_lists WHERE id > 2123100');
            \DB::statement('DELETE FROM __resource_list_scopes WHERE id > 2124100');
            \DB::statement('DELETE FROM __resource_list_relations WHERE id > 2125100');
            \DB::statement('DELETE FROM __resource_list_layout WHERE id > 2126100');
            \DB::statement('DELETE FROM __resource_list_search WHERE id > 2127100');
            \DB::statement('DELETE FROM __resource_data WHERE id > 2128100');
            \DB::statement('DELETE FROM __resource_data_scopes WHERE id > 2129100');
            \DB::statement('DELETE FROM __resource_data_relations WHERE id > 2130100');
            \DB::statement('DELETE FROM __resource_data_view_sections WHERE id > 2131100');
            \DB::statement('DELETE FROM __resource_data_view_section_items WHERE id > 2132100');
            \DB::statement('DELETE FROM __resource_actions WHERE id > 2133100');
            \DB::statement('DELETE FROM __resource_action_methods WHERE id > 2134100');
            \DB::statement('DELETE FROM __resource_action_attrs WHERE id > 2135100');
            \DB::statement('DELETE FROM __resource_action_lists WHERE id > 2136100');
            \DB::statement('DELETE FROM __resource_action_data WHERE id > 2137100');
            \DB::statement('DELETE FROM __resource_defaults WHERE id > 2138100');
            \DB::statement('DELETE FROM __resource_metrics WHERE id > 2139100');
            \DB::statement('DELETE FROM __resource_dashboard WHERE id > 2140100');
            \DB::statement('DELETE FROM __resource_dashboard_sections WHERE id > 2141100');
            \DB::statement('DELETE FROM __resource_dashboard_section_items WHERE id > 2142100');

            \DB::statement('ALTER TABLE `__roles`  AUTO_INCREMENT=2104101');
            \DB::statement('ALTER TABLE `__resources`  AUTO_INCREMENT=2106101');
            \DB::statement('ALTER TABLE `__resource_roles`  AUTO_INCREMENT=2107101');
            \DB::statement('ALTER TABLE `__resource_scopes`  AUTO_INCREMENT=2108101');
            \DB::statement('ALTER TABLE `__resource_relations`  AUTO_INCREMENT=2109101');
            \DB::statement('ALTER TABLE `__resource_forms`  AUTO_INCREMENT=2110101');
            \DB::statement('ALTER TABLE `__resource_form_fields`  AUTO_INCREMENT=2111101');
            \DB::statement('ALTER TABLE `__resource_form_field_data`  AUTO_INCREMENT=2112101');
            \DB::statement('ALTER TABLE `__resource_form_field_options`  AUTO_INCREMENT=2113101');
            \DB::statement('ALTER TABLE `__resource_form_field_attrs`  AUTO_INCREMENT=2114101');
            \DB::statement('ALTER TABLE `__resource_form_field_dynamic`  AUTO_INCREMENT=2115101');
            \DB::statement('ALTER TABLE `__resource_form_field_validations`  AUTO_INCREMENT=2116101');
            \DB::statement('ALTER TABLE `__resource_form_field_depends`  AUTO_INCREMENT=2117101');
            \DB::statement('ALTER TABLE `__resource_form_layout`  AUTO_INCREMENT=2118101');
            \DB::statement('ALTER TABLE `__resource_form_data_map`  AUTO_INCREMENT=2119101');
            \DB::statement('ALTER TABLE `__resource_form_defaults`  AUTO_INCREMENT=2120101');
            \DB::statement('ALTER TABLE `__resource_form_collection`  AUTO_INCREMENT=2121101');
            \DB::statement('ALTER TABLE `__resource_form_upload`  AUTO_INCREMENT=2122101');
            \DB::statement('ALTER TABLE `__resource_lists`  AUTO_INCREMENT=2123101');
            \DB::statement('ALTER TABLE `__resource_list_scopes`  AUTO_INCREMENT=2124101');
            \DB::statement('ALTER TABLE `__resource_list_relations`  AUTO_INCREMENT=2125101');
            \DB::statement('ALTER TABLE `__resource_list_layout`  AUTO_INCREMENT=2126101');
            \DB::statement('ALTER TABLE `__resource_list_search`  AUTO_INCREMENT=2127101');
            \DB::statement('ALTER TABLE `__resource_data`  AUTO_INCREMENT=2128101');
            \DB::statement('ALTER TABLE `__resource_data_scopes`  AUTO_INCREMENT=2129101');
            \DB::statement('ALTER TABLE `__resource_data_relations`  AUTO_INCREMENT=2130101');
            \DB::statement('ALTER TABLE `__resource_data_view_sections`  AUTO_INCREMENT=2131101');
            \DB::statement('ALTER TABLE `__resource_data_view_section_items`  AUTO_INCREMENT=2132101');
            \DB::statement('ALTER TABLE `__resource_actions`  AUTO_INCREMENT=2133101');
            \DB::statement('ALTER TABLE `__resource_action_methods`  AUTO_INCREMENT=2134101');
            \DB::statement('ALTER TABLE `__resource_action_attrs`  AUTO_INCREMENT=2135101');
            \DB::statement('ALTER TABLE `__resource_action_lists`  AUTO_INCREMENT=2136101');
            \DB::statement('ALTER TABLE `__resource_action_data`  AUTO_INCREMENT=2137101');
            \DB::statement('ALTER TABLE `__resource_defaults`  AUTO_INCREMENT=2138101');
            \DB::statement('ALTER TABLE `__resource_metrics`  AUTO_INCREMENT=2139101');
            \DB::statement('ALTER TABLE `__resource_dashboard`  AUTO_INCREMENT=2140101');
            \DB::statement('ALTER TABLE `__resource_dashboard_sections`  AUTO_INCREMENT=2141101');
            \DB::statement('ALTER TABLE `__resource_dashboard_section_items`  AUTO_INCREMENT=2142101');

            \DB::statement('set foreign_key_checks = ' . $_);
        }
    }
