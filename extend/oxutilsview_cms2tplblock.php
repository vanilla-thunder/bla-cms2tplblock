<?php

class oxutilsview_cms2tplblock extends oxutilsview_cms2tplblock_parent
{
    public function getTemplateBlocks($sFile)
    {
        $aRet = parent::getTemplateBlocks($sFile);
        $oConfig = $this->getConfig();
        $sTplDir = trim($oConfig->getConfigParam('_sTemplateDir'), '/\\');
        $sFile = str_replace(['\\', '//'], '/', $sFile);
        if (preg_match('@/' . preg_quote($sTplDir, '@') . '/(.*)$@', $sFile, $m)) {
            $sFile = $m[1];
        }

        $oDb = oxDb::getDb(oxDb::FETCH_MODE_ASSOC);
        $sFileParam = $oDb->quote(str_replace(['\\', '//'], '/', $sFile));
        $sShpIdParam = $oDb->quote($oConfig->getShopId());

        $sSql = "select * from oxcontents where oxactive=1 and oxshopid=$sShpIdParam and oxtitle=$sFileParam";
        $rs = $oDb->select($sSql);
        if ($rs != false && $rs->recordCount() > 0) {
            while (!$rs->EOF) {
                try {
                    if (!is_array($aRet[$rs->fields['OXLOADID']])) $aRet[$rs->fields['OXLOADID']] = [];
                    $aRet[$rs->fields['OXLOADID']][] = $rs->fields['OXCONTENT'];
                } catch (oxException $oE) {
                    $oE->debugOut();
                }
                $rs->moveNext();
            }
        }

        return $aRet;
    }
}
