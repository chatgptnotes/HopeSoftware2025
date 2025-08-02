<?php echo $this->Form->create('query');
 echo $this->Form->input('databaseName',array('type'=>'text'));
 echo $this->Form->input('query',array('type'=>'textArea'));
 echo $this->Form->submit('save');
 echo $this->Form->end();
 
 print_r($query);