<?php

// module name
$HmvcMenu["accounts"] = array(
    //set icon
    "icon"           => "<i class='ti-bag'></i>", 

    // stockmovment
   "c_o_a" => array( 
        "controller" => "accounts",
        "method"     => "show_tree",
        "permission" => "read"
    ), 
   
      "debit_voucher" => array( 
        "controller" => "accounts",
        "method"     => "debit_voucher",
        "permission" => "create"
    ), 
   "credit_voucher" => array( 
        "controller" => "accounts",
        "method"     => "credit_voucher",
        "permission" => "read"
    ), 
    "contra_voucher" => array( 
        "controller" => "accounts",
        "method"     => "contra_voucher",
        "permission" => "read"
    ),
     "journal_voucher" => array( 
        "controller" => "accounts",
        "method"     => "journal_voucher",
        "permission" => "read"
    ),  
      "voucher_approval" => array( 
        "controller" => "accounts",
        "method"     => "aprove_v",
        "permission" => "create"
    ), 
      
       "account_report" => array( 
				        "voucher_report" => array( 
				          "controller" => "accounts",
				          "method"     => "voucher_report",
				          "permission" => "read"
				    ), 

				         "cash_book" => array( 
					        "controller" => "accounts",
					        "method"     => "cash_book",
					        "permission" => "read"
					    ), 
				          "bank_book" => array( 
					        "controller" => "accounts",
					        "method"     => "bank_book",
					        "permission" => "read"
					    ), 
				     
				          "general_ledger" => array( 
					        "controller" => "accounts",
					        "method"     => "general_ledger",
					        "permission" => "read"
					    ), 
				           "trial_balance" => array( 
					        "controller" => "accounts",
					        "method"     => "trial_balance",
					        "permission" => "read"
					    ),
					     "profit_loss" => array( 
					        "controller" => "accounts",
					        "method"     => "profit_loss_report",
					        "permission" => "read"
					    ),
					   
					   "cash_flow" => array( 
					        "controller" => "accounts",
					        "method"     => "cash_flow_report",
					        "permission" => "read"
					    ),
					  
					    "coa_print" => array( 
					        "controller" => "accounts",
					        "method"     => "coa_print",
					        "permission" => "read"
					    ),  
    ), 
);
   

 