<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Event extends Base {

	protected $table = 'tracker_events';

	protected $fillable = array(
		'name',
	);

	public function allInThePeriod($minutes, $result, $lists = array())
	{
		$query =
			$this
				->select(
					'tracker_events.id',
					'tracker_events.name',
					$this->getConnection()->raw('count(tracker_events_log.id) as total')
				)
				->from('tracker_events')				
				->period($minutes, 'tracker_events_log')
				->join('tracker_events_log', 'tracker_events_log.event_id', '=', 'tracker_events.id')			
				->join('tracker_system_classes', 'tracker_events_log.class_id', '=', 'tracker_system_classes.id');				

		// :: hack for filtering related user list event tracking ::
		if(count($lists) > 0) {
			$i = 0;
			foreach ($lists as $key => $list) {
				if($i==0) {
					$query->where('tracker_events.name', '=', 'favourite.store'.$list->id);
				}
				$query->orWhere('tracker_events.name', '=', 'favourite.store'.$list->id);
				$i++;
			}
		}		
		///
		
		$query->groupBy('tracker_events.id', 'tracker_events.name')->orderBy('total', 'desc');

		if ($result)
		{
			return $query->get();
		}

		return $query;
	}

}
