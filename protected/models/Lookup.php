<?php
/**
 * The followings are the available columns in table 'tbl_lookup':
 * @property integer $id
 * @property string $name
 * @property integer $code
 * @property string $type
 * @property integer $position
 * @property string $color
 */
class Lookup extends CActiveRecord
{
	private static $_items = array();
    private static $_colors = array(); 

	/**
	 * Returns the static model of the specified AR class.
	 * @return static the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_lookup';
	}

	/**
	 * Returns the items for the specified type.
	 * @param string item type (e.g. 'PostStatus').
	 * @return array item names indexed by item code. The items are order by their position values.
	 * An empty array is returned if the item type does not exist.
	 */
	public static function items($type)
	{
		if (!isset(self::$_items[$type]))
			self::loadItems($type);
		return self::$_items[$type];
	}

	/**
	 * Returns the item name for the specified type and code.
	 * @param string the item type (e.g. 'PostStatus').
	 * @param integer the item code (corresponding to the 'code' column value)
	 * @return string the item name for the specified the code. False is returned if the item type or code does not exist.
	 */
	public static function item($type, $code)
	{
		if (!isset(self::$_items[$type]))
			self::loadItems($type);
		return isset(self::$_items[$type][$code]) ? self::$_items[$type][$code] : false;
	}

	/**
	 * Loads the lookup items for the specified type from the database.
	 * @param string the item type
	 */
	private static function loadItems($type)
	{
		self::$_items[$type] = array();
		$models = self::model()->findAll(
			array(
				'condition' => 'type=:type',
				'params' => array(':type' => $type),
				'order' => 'position',
			)
		);

		foreach ($models as $model) {

			self::$_items[$type][$model->code] = $model->name;
		}
	}

	/**
     * Returns the color for the specified type and code.
     * @param string $type the item type (e.g. 'PostStatus').
     * @param integer $code the item code (corresponding to the 'code' column value)
     * @return string the color associated with the specified type and code. False is returned if the item type or code does not exist.
     */
    public static function color($type, $code)
    {
        if (!isset(self::$_colors[$type]))
            self::loadColors($type);
        return isset(self::$_colors[$type][$code]) ? self::$_colors[$type][$code] : false;
    }

	/**
     * Loads the lookup colors for the specified type from the database.
     * @param string $type the item type
     */
    private static function loadColors($type)
    {
        self::$_colors[$type] = array();
        $models = self::model()->findAll(
            array(
                'condition' => 'type=:type',
                'params' => array(':type' => $type),
                'order' => 'position',
            )
        );

        foreach ($models as $model) {
            self::$_colors[$type][$model->code] = $model->color;
        }
    }
}