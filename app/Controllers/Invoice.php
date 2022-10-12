<?php
    // Stap_11
    class Invoice extends BaseController 
    {

        public function __construct() 
        {
            // Hier moet je de Invoice model aanroepen.
            $this->InvoiceModel = $this->model('InvoiceModel');
        }

        // Stap_12
        /**
         * Display all Invoices on index Invoice view.
         * @return void
         */

        // Stap_13
        /**
         * Display the selected Invoice on details Invoice view.
         * @param integer $id
         * @return void
         */
    }
?>