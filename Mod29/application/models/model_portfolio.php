<?php
class Model_Portfolio extends Model
{
  public function get_data()
  {
    // Здесь мы просто симулируем реальные данные.
    return array(
      array(
        'Year' => '2021',
        'Site' => 'https://victoiredouy.com/',
        'Description' => 'Сайт занявший 1 место в 2021 году'
      ),
      array(
        'Year' => '2021',
        'Site' => 'https://www.kalso.com/',
        'Description' => 'Сайт занявший последнее место в 2021 году'
      ),
    );
  }
}
