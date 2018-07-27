<?php
namespace izi\explode;
use Yii;

class Explode extends \yii\base\Component
{
  private $_perm ;

  public function behaviors()
  {
    if(YII_DEBUG && Yii::$app->user->can(ROOT_USER)){
      $this->perm = true;
    }
  }

  public function setPerm(){
    if(YII_DEBUG && Yii::$app->user->can(ROOT_USER)){
      $this->perm = true;
    }else{
      $this->perm = false;
    }
  }

  private function getBasicTables(){
    return [
      //"acc_acounts",
      //"acc_bills",
      //"acc_funds",
      //"acc_reson_modules",
      //"acc_resons",
      //"activity",
      "ad_languages",
      //"address_books",
      "admin_menu",
      "admin_menu_attrs",
      "admin_menu_to_attrs",
      "adverts",
      "adverts_category",
      "analytics",
      //"app_items_note",
      //"app_items_to_note",
      "apps",
      "apps_to_shop",
      "articles",
      "articles_attrs",
      "articles_prices",
      "articles_prices_list",
      "articles_to_attrs",
      "articles_to_filters",
      "auth_assignment",
      "auth_item",
      "auth_item_child",
      "auth_rule",
      //"bank_plus",
      //"bank_plus_to_user",
      "box",
      "box_to_filter_type",
      "box_to_site_menu",
      "branches",
      //"class",
      //"class_groups",
      //"class_lession",
      //"class_member_to_group",
      //"class_module",
      //"class_module_to_permission",
      //"class_reserve",
      //"class_test",
      //"class_test_score",
      //"class_to_articles",
      "comments",
      "comments_liked",
      //"contract_to_employee",
      //"contract_type",
      //"contracts",
      //"cost_category",
      //"costs",
      "cronjobs",
      "ctemplate",
      "ctemplate_to_shop",
      "currency",
      "custom_page",
      "customer_groups",
      "customer_type_to_template",
      "customer_type_to_templete",
      "customers",
      "customers_to_class",
      "customers_to_places",
      //"cvideos",
      // "departure_places",
      // "departure_places_to_filters",
      // "departure_scheduler",
      // "departure_to_destination_type",
      // "distance_to_places",
      // "distances",
      // "distances_to_prices",
      // "distances_to_stations",
      // "distances_to_suppliers",
      "domain_pointer",
      "domains_manages",
      "emails_newsletter",
      "emails_subscribes",
      // "exam_answer",
      // "exam_answer_to_question",
      // "exam_question",
      // "exam_question_group",
      "examples_data",
      "exchange_rate",
      "external_links",
      "f_mn",
      "files",
      "files_categorys",
      "filter_to_box",
      "filter_to_filter",
      "filter_to_menu",
      "filters",
      // "foods",
      // "foods_categorys",
      // "foods_to_categorys",
      // "foods_to_menus",
      "form_design",
      "form_design_category",
      "form_to_temps",
      "forms",
      "goods_fields",
      "goods_groups",
      //"guest_groups",
    //  "guest_groups_to_tickets",
      //"guide_attrs",
      //"guide_language",
      //"guides",
      //"guides_to_prices",
      //"guides_to_suppliers",
      "helps",
      "helps_categorys",
      // "intra_request_to_users",
      // "intra_requests",
      "item_to_courses",
      "item_to_goods_group",
      "item_to_place",
      "item_to_prices",
      "item_to_tag",
      "item_to_template",
      "item_to_text_attrs",
      "item_to_warehouse",
      "items_to_branches",
      "items_to_category",
      "items_to_contract",
      "items_to_customers",
      "items_to_posiotion",
      "items_to_producer",
      //"lession_categorys",
      //"lich_khaigiang",
      "local",
      "member_to_class_groups",
      //"menus",
      //"menus_to_categorys",
      //"menus_to_prices",
    //  "menus_to_suppliers",
      "messages",
      "messages_cc",
      "messages_label",
      "messages_to_label",
      "module_to_group",
      // "nationality_groups",
      // "nationality_groups_to_local",
      // "nationality_groups_to_supplier",
      // "nationality_groups_to_ticket",
      "notifications",
      "notifications_to_users",
      "orders",
      "package_prices",
      "package_to_quotation",
      "package_to_supplier",
      "permission_modules",
      "permission_to_groups",
      "place_to_filters",
      "places",
      // "pos_bills",
      // "pos_fund_books",
      // "pos_fund_to_currency",
      // "pos_receipts",
      "positions",
      "positions_to_users",
      "producers",
      "product_attrs",
      "product_unit",
      "product_unit_exchange",
      "products_made_in",
      //"program_tours",
      "promotions",
      "question",
      "quotations",
      "ratings",
      "ratings_statistics",
      "redirects",
      // "rooms_categorys",
      // "rooms_groups",
      // "rooms_to_hotel",
      // "rooms_to_prices",
      "root_configs",
      "routes",
      // "seasons",
      // "seasons_categorys",
      // "seasons_categorys_to_services",
      // "seasons_categorys_to_suppliers",
      // "seasons_to_private_suppliers",
      // "seasons_to_suppliers",
      "server_config",
      "services",
      "services_categorys",
      "services_types_categorys",
      "shop_to_groups",
      "shops",
      "shops_connect",
      "shops_connected",
      "shops_packages",
      "shops_to_packages",
      "site_configs",
      "site_groups",
      "site_menu",
      "slugs",
      "statellite",
      "states",
      "stations",
      "stations_to_places",
      // "supplier_quotations",
      // "supplier_quotations_to_supplier",
      // "supplier_to_prices_default",
      "suspended",
      "system_filters",
      "system_filters_groups",
      "system_filters_to_groups",
      "system_logs",
      "system_note",
      "system_permission_groups",
      "tab_categorys",
      "tab_detail_example",
      "tab_details",
      "tags",
      "task_scheduler",
      "temp_to_modules",
      "temp_to_shop",
      "temp_to_shop_category",
      "template_category",
      "templates",
      "templete_category",
      "templetes",
      "text_attrs",
      "text_category_attrs",
      "text_instructions",
      "text_translate",
      //"tickets",
      //"tickets_to_prices",
      //"tickets_to_suppliers",
      // "tours_attrs",
      // "tours_attrs_copy",
      // "tours_programs",
      // "tours_programs_exchange_rate",
      // "tours_programs_guides",
      // "tours_programs_guides_prices",
      // "tours_programs_other_prices",
      // "tours_programs_segments",
      // "tours_programs_segments_extend_prices",
      // "tours_programs_segments_guides",
      // "tours_programs_segments_to_places",
      // "tours_programs_services_days",
      // "tours_programs_services_distances",
      // "tours_programs_services_prices",
      // "tours_programs_suppliers_prices",
      // "tours_programs_suppliers_vehicles",
      // "tours_programs_to_suppliers",
      // "tours_to_destinations",
      // "trains_prices_distances",
      // "trains_to_prices",
      "trash",
      "user_exchange_rate",
      "user_groups",
      "user_text_translate",
      "user_to_group",
      "user_to_shop",
      "users",
      // "vehicles_categorys",
      // "vehicles_makers",
      // "vehicles_to_cars",
      // "vehicles_to_prices",
      "warehouse",
      //"webchat_lines",
      //"webchat_users",
      //"weekend"
    ];
  }

private function removeDirectory(){
  $root = (Yii::getAlias('@app'));

$rmDir = [
  "$root/i18n"
];

  $TEMP = \izi\models\Shop::getAllTemplate();
  $t = ['admin'];
  if(!empty($TEMP)){
    foreach($TEMP as $te){
      $t[] = $te['name'];
    }
  }
  $dir = Yii::getAlias('@app/views/site');
  $objects = scandir($dir);
	foreach ($objects as $object) {
		if ($object != "." && $object != "..") {
      if (filetype($dir."/".$object) == "dir" && !in_array($object, $t)){
        $rmDir[] = ($dir."/".$object);
      }
    }
  }

  $dir = Yii::getAlias('@app/web/themes');
  $objects = scandir($dir);
	foreach ($objects as $object) {
		if ($object != "." && $object != "..") {
      if (filetype($dir."/".$object) == "dir" && !in_array($object, $t)){
        $rmDir[] = ($dir."/".$object);
      }
    }
  }
  //
  //
  return ($rmDir);
  //return $rmDir;
}
  private function getDsnAttribute($name, $dsn)
    {
        if (preg_match('/' . $name . '=([^;]*)/', $dsn, $match)) {
            return $match[1];
        } else {
            return null;
        }
    }

  public function getPerm(){
    if($this->_perm == null){
      $this->setPerm();
    }
    return $this->_perm;
  }

  private function dropTable($table){
    $db = Yii::$app->getDb();
    $dbName = $this->getDsnAttribute('dbname', $db->dsn);

$sql = "SELECT
  TABLE_NAME,COLUMN_NAME,CONSTRAINT_NAME, REFERENCED_TABLE_NAME,REFERENCED_COLUMN_NAME
FROM
  INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE
  REFERENCED_TABLE_SCHEMA = '$dbName' AND
  REFERENCED_TABLE_NAME = '$table';";

  $l = Yii::$app->db->createCommand($sql)->queryAll();
  if(!empty($l)){
    foreach($l as $v){
       $this->dropTable($v['TABLE_NAME']);
    }
  }
  $sql = "DROP TABLE `$table`;";
  Yii::$app->db->createCommand($sql)->execute();


  }

  public function expBasicData(){
    $schema = Yii::$app->db->schema;
    $tables = $schema->tableNames;
    $dropTables = [];
    $sqls = [
      Yii::$app->db->createCommand()->delete('shops',[
        'not in','id',__SID__
        ])->getRawSql()
    ];

    foreach($tables as $table){

      if(!in_array($table,$this->getBasicTables())){
        $dropTables[] = $table;
      }else{
        $columns = Yii::$app->db->schema->getTableSchema ($table)->columnNames;
        if(!empty($columns)){
          if(in_array('sid',$columns)){
              $sqls[] = Yii::$app->db->createCommand()->delete($table,['and',['>','sid',0],[
                'not in','sid',__SID__
                ]])->getRawSql();
          }
          foreach($columns as $column){

          }
        }
      }


    }
    // Drop $dropTables
    if(!empty($dropTables)){
      //$sqls[] = "DROP TABLE `".implode('`,`',$dropTables)."`;";
      foreach($dropTables as $table){
        //$sql = "DELETE FROM `$table`;";
        //Yii::$app->db->createCommand($sql)->execute();

        $this->dropTable($table);


      }

    }

    if(!empty($sqls)){
      foreach($sqls as $sql){
        Yii::$app->db->createCommand($sql)->execute();
      }
    }

    // RM DIR
    if(!empty($this->removeDirectory())){
      foreach($this->removeDirectory() as $dir){

        RemoveDir($dir);
        echo 'Removed '. $dir . '<br/>';
      }
    }

  }


  public function expBasicAll(){
    // Explode data
    $this->expBasicData();
  }
}
