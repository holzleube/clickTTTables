<?php

		
		
		// no result so nothing to do
		if ( !count( $table_matches[0] ) && !count($position_matches[0]) && !count($timeTable_matches[0]) ) {
			return true;
		}
		}
			//get params
		}
			$group = $this->getParameter('group', $timeTable_matches[0][0]);
			$teamTable = $this->getParameter('id', $timeTable_matches[0][0]);
		}