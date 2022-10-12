<?php
    // Stap_05
    class InvoiceModel
    {
        private Database $Db;

        /**
         * Constructor InvoiceModel
         * @param [type] $db
         */
        public function __construct(Database $db = new Database)
        {
            $this->Db = $db;
        }

        // Stap_06
        /**
         * Fetch the all Invoices from database.
         * @return mixed
         */
        
        // Stap_10
         /**
         * Fetch the selected Invoice by Id from database.
         * @param [type] $id
         * @return InvoiceEntity
         */
    }
?>