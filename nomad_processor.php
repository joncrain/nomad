<?php

use munkireport\processors\Processor;

class Nomad_processor extends Processor
{
    public function run($json)
    {
        $modelData = ['serial_number' => $this->serial_number];

        // Check if data was uploaded
        if (! $json ) {
            throw new Exception("Error Processing Request: No JSON file found", 1);
        }
        // Process json into object thingy
        $data = json_decode($json, true);

		foreach($data as $key=>$val) {
            $modelData[$key] = $val;
		} //end foreach explode lines

        Nomad_model::updateOrCreate(
            ['serial_number' => $this->serial_number], $modelData
        );
        
        return $this;
    }   
}
