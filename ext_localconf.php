<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Wl.WlKis',
            'Kisfrontend',
            [
                'Kunde' => 'list, show, new, create'
            ],
            // non-cacheable actions
            [
                'Kunde' => 'create'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        kisfrontend {
                            iconIdentifier = wl_kis-plugin-kisfrontend
                            title = LLL:EXT:wl_kis/Resources/Private/Language/locallang_db.xlf:tx_wl_kis_kisfrontend.name
                            description = LLL:EXT:wl_kis/Resources/Private/Language/locallang_db.xlf:tx_wl_kis_kisfrontend.description
                            tt_content_defValues {
                                CType = list
                                list_type = wlkis_kisfrontend
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'wl_kis-plugin-kisfrontend',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:wl_kis/Resources/Public/Icons/user_plugin_kisfrontend.svg']
			);
		
    }
);
