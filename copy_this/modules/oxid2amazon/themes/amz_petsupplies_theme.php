<?php
/**
 * Pet supplies theme
 * @link http://g-ecx.images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/PetSupplies.xsd
 */
class amz_petsupplies_theme extends az_amz_theme
{
	protected $_sRootTag		= 'PetSupplies';
	
	protected $_sCategoryTag 	= 'ProductType';
	
	protected $_sCatType 		= 'choice';
	
	protected $_aCategories = array(
		'PetSuppliesMisc'
	);
	
	protected $_aVariationThemes = null;
	
	protected $_sSubCategoryTag = null;
	
	protected $_aSubCategories = null;
}
?>
