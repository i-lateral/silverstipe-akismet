<?php
/** code responsible for testing a comment when a comment is made
 *
 * @package akismet
 */

class Akismet_Comment extends DataExtension {
    public function onBeforeWrite() {					
		// If Akismet is enabled
		if(SSAkismet::isEnabled()) {
			try {
			    $akismet = new SSAkismet();
				$akismet->setCommentAuthor($this->owner->Name);
				$akismet->setCommentContent($this->owner->Comment);
				
				$result = (int)$akismet->isCommentSpam();
				
				if($result)
					if(SSAkismet::getSaveSpam()) $this->owner->IsSpam = true;
					
			} catch (Exception $e) {
				// Akismet didn't work, most likely the service is down.
			}
		}        
    }
}
