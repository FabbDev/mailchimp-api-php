<?php

namespace Mailchimp;

class MailchimpBatches extends MailchimpApiUser {
  
  public function getBatches($parameters = []) {
    return $this->api_class->request('GET', '/batches', NULL, $parameters);
  }
  
  public function delete($batch_id) {
    $tokens = [
      'batch_id' => $batch_id,
    ];

    return $this->api_class->request('DELETE', '/batches/{batch_id}', $tokens);
  }

}
