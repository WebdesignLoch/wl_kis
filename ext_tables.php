<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Wl.WlKis',
            'Kisfrontend',
            'Kis Frontend'
        );

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Wl.WlKis',
                'web', // Make module a submodule of 'web'
                'kisbackend', // Submodule key
                '', // Position
                [
                    'Kunde' => 'list, show, new, create',
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:wl_kis/Resources/Public/Icons/user_mod_kisbackend.svg',
                    'labels' => 'LLL:EXT:wl_kis/Resources/Private/Language/locallang_kisbackend.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('wl_kis', 'Configuration/TypoScript', 'Kundeninformationssystem');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wlkis_domain_model_kunde', 'EXT:wl_kis/Resources/Private/Language/locallang_csh_tx_wlkis_domain_model_kunde.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wlkis_domain_model_kunde');

    }
);
