<?php

Trait Working
{
    protected function where($where)
    {
        return $where;
    }

    protected function why($reason)
    {
        return $reason;
    }

    protected function how($how)
    {
    	return $how;
    }

    public function work($where, $reason, $how)
    {
    	echo $this->where($where);
    	echo $this->why($reason);
    	echo $this->how($how);
    }
}

class Person
{
	use Working;
}

$bob = new Person();
$where = '横浜で';
$why = 'お金欲しいから';
$reason = '営業する';
$bob->work($where, $why, $reason); // 横浜でお金欲しいから営業する