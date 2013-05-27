<?php

/*The name of your own class that shall overload the oxarticle class.
Best practice: yournameabbr_modulename_origclassname extends [yourclassname]_parent.
Instantiate your new class:*/
class mst_mysaving_oxarticle extends mst_mysaving_oxarticle_parent
{
    //Add a new function to the class:
    public function getMySaving()
    {
        //define the variable you want to fill
        $sProductSaving = '';

        //Assign a default value for $dProductOldPrice in case there is no TPrice
        $dProductOldPrice = 0;

        //Grab the data you need via getters from the database and put them into a self defined variable
        //First get the old price of the product. Please note: from 4.7/5.0 it must be getPrice.
        //Check if there is any getTPrice first:
        $oTPrice = $this->getTPrice();
        if ($oTPrice) {
            $dProductOldPrice = $oTPrice->getPrice();
        }

        //If this old price is bigger than "0",
        if( $dProductOldPrice > 0 ) {
            //get the present price of the product,
            $dProductPrice = $this->getPrice()->getPrice();

            //calculate the difference between the old and the new price as a percentage and ...
            $dProductSaving = 100 - ( $dProductPrice * 100 / $dProductOldPrice );

            if( $dProductSaving > 0 ){
                //... format the output:
                $sProductSaving = number_format($dProductSaving, 0, "", "");
            }

        }
        //Return the value of your calculation so it can be parsed to the template
        return $sProductSaving;
    }
}

/* do not close your php script here! */
/* ?> */