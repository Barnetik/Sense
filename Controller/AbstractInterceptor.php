<?php
/**
 * Created by Asier Marqués <asiermarques@gmail.com>
 * Date: 8/5/16
 * Time: 15:00
 */

namespace Simettric\Sense\Controller;


abstract class AbstractInterceptor extends AbstractBaseController{

	protected static $executed = false;

    /**
     * @return bool
     */
    abstract function canBeExecuted();

    /**
     * @param \WP_Query $query
     * @return void
     */
	abstract function execute(\WP_Query $query);


    /**
     * @return bool
     */
	function isExecuted(){

		$executed = static::$executed;

		if(!static::$executed)
			static::$executed = true;

		return $executed;

	}





} 