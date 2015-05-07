<?php 

use Carbon\Carbon;
/**
* 
*/
class BaseModel extends Eloquent
{

// created at function
	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

// last updated function
	public function getUpdatedAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

}