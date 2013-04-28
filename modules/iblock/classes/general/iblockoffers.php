<?
class CAllIBlockOffersTmp
{
	public static function Add($intProductIBlockID,$intOffersIBlockID)
	{
		global $DB;

		$intProductIBlockID = intval($intProductIBlockID);
		$intOffersIBlockID = intval($intOffersIBlockID);
		if ((0 >= $intProductIBlockID) || (0 >= $intOffersIBlockID))
			return false;
		$arFields = array(
			'PRODUCT_IBLOCK_ID' => $intProductIBlockID,
			'OFFERS_IBLOCK_ID' => $intOffersIBlockID,
		);
		return $DB->Add("b_iblock_offers_tmp", $arFields);
	}

	public static function Delete($ID)
	{
		global $DB;

		$ID = intval($ID);
		if (0 >= $ID)
			return false;
		if(!$DB->Query("DELETE FROM b_iblock_offers_tmp WHERE ID=".$ID))
			return false;
		return true;
	}

	public static function GetOldID($intProductIBlockID,$intOffersIBlockID)
	{
		return false;
	}

	public static function DeleteOldID($intProductIBlockID,$intOffersIBlockID,$intInterval = 86400)
	{
		return true;
	}
}
?>