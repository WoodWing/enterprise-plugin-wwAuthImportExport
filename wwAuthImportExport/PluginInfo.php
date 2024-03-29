<?php

/****************************************************************************
   Copyright 2019 WoodWing Software BV

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
****************************************************************************/

require_once BASEDIR.'/server/interfaces/plugins/EnterprisePlugin.class.php';

class wwAuthImportExport_EnterprisePlugin extends EnterprisePlugin
{
	public function getPluginInfo()
	{ 
		require_once BASEDIR.'/server/interfaces/plugins/PluginInfoData.class.php';
		$info = new PluginInfoData(); 
		$info->DisplayName = 'wwAuthImportExport';
		$info->Version     = '20221110'; // don't use PRODUCTVERSION
		$info->Description = 'Export/Import Authentications, User Groups and Access Profiles';
		$info->Copyright   = COPYRIGHT_WOODWING;
		return $info;
	}
	
	final public function getConnectorInterfaces() 
	{ 
		$connectors =  array(

// adm services
			// 'AdmAddGroupsToUser_EnterpriseConnector',
			// 'AdmAddUsersToGroup_EnterpriseConnector',
			// 'AdmCopyIssues_EnterpriseConnector',
			// 'AdmCreateAutocompleteTermEntities_EnterpriseConnector',
			// 'AdmCreateAutocompleteTerms_EnterpriseConnector',
			// 'AdmCreateEditions_EnterpriseConnector',
			// 'AdmCreateIssues_EnterpriseConnector',
			// 'AdmCreatePubChannels_EnterpriseConnector',
			// 'AdmCreatePublications_EnterpriseConnector',
			// 'AdmCreateSections_EnterpriseConnector',
			// 'AdmCreateUserGroups_EnterpriseConnector',
			// 'AdmCreateUsers_EnterpriseConnector',
			// 'AdmDeleteAutocompleteTermEntities_EnterpriseConnector',
			// 'AdmDeleteAutocompleteTerms_EnterpriseConnector',
			// 'AdmDeleteEditions_EnterpriseConnector',
			// 'AdmDeleteIssues_EnterpriseConnector',
			// 'AdmDeletePubChannels_EnterpriseConnector',
			// 'AdmDeletePublications_EnterpriseConnector',
			// 'AdmDeleteSections_EnterpriseConnector',
			// 'AdmDeleteUsers_EnterpriseConnector',
			// 'AdmGetAutocompleteTermEntities_EnterpriseConnector',
			// 'AdmGetAutocompleteTerms_EnterpriseConnector',
			// 'AdmGetEditions_EnterpriseConnector',
			// 'AdmGetIssues_EnterpriseConnector',
			// 'AdmGetPubChannels_EnterpriseConnector',
			// 'AdmGetPublications_EnterpriseConnector',
			// 'AdmGetSections_EnterpriseConnector',
			// 'AdmGetUserGroups_EnterpriseConnector',
			// 'AdmGetUsers_EnterpriseConnector',
			// 'AdmLogOff_EnterpriseConnector',
			// 'AdmLogOn_EnterpriseConnector',
			// 'AdmModifyAutocompleteTermEntities_EnterpriseConnector',
			// 'AdmModifyAutocompleteTerms_EnterpriseConnector',
			// 'AdmModifyEditions_EnterpriseConnector',
			// 'AdmModifyIssues_EnterpriseConnector',
			// 'AdmModifyPubChannels_EnterpriseConnector',
			// 'AdmModifyPublications_EnterpriseConnector',
			// 'AdmModifySections_EnterpriseConnector',
			// 'AdmModifyUserGroups_EnterpriseConnector',
			// 'AdmModifyUsers_EnterpriseConnector',
			// 'AdmRemoveGroupsFromUser_EnterpriseConnector',
			// 'AdmRemoveUsersFromGroup_EnterpriseConnector',

// ads services
			// 'AdsCopyDatasource_EnterpriseConnector',
			// 'AdsCopyQuery_EnterpriseConnector',
			// 'AdsDeleteDatasource_EnterpriseConnector',
			// 'AdsDeletePublication_EnterpriseConnector',
			// 'AdsDeleteQuery_EnterpriseConnector',
			// 'AdsDeleteQueryField_EnterpriseConnector',
			// 'AdsGetDatasource_EnterpriseConnector',
			// 'AdsGetDatasourceInfo_EnterpriseConnector',
			// 'AdsGetDatasourceType_EnterpriseConnector',
			// 'AdsGetDatasourceTypes_EnterpriseConnector',
			// 'AdsGetPublications_EnterpriseConnector',
			// 'AdsGetQueries_EnterpriseConnector',
			// 'AdsGetQuery_EnterpriseConnector',
			// 'AdsGetQueryFields_EnterpriseConnector',
			// 'AdsGetSettings_EnterpriseConnector',
			// 'AdsGetSettingsDetails_EnterpriseConnector',
			// 'AdsNewDatasource_EnterpriseConnector',
			// 'AdsNewQuery_EnterpriseConnector',
			// 'AdsQueryDatasources_EnterpriseConnector',
			// 'AdsSaveDatasource_EnterpriseConnector',
			// 'AdsSavePublication_EnterpriseConnector',
			// 'AdsSaveQuery_EnterpriseConnector',
			// 'AdsSaveQueryField_EnterpriseConnector',
			// 'AdsSaveSetting_EnterpriseConnector',

// dat services
			// 'DatGetDatasource_EnterpriseConnector',
			// 'DatGetRecords_EnterpriseConnector',
			// 'DatGetUpdates_EnterpriseConnector',
			// 'DatHasUpdates_EnterpriseConnector',
			// 'DatOnSave_EnterpriseConnector',
			// 'DatQueryDatasources_EnterpriseConnector',
			// 'DatSetRecords_EnterpriseConnector',

// pln services
			// 'PlnCreateAdverts_EnterpriseConnector',
			// 'PlnCreateLayouts_EnterpriseConnector',
			// 'PlnDeleteAdverts_EnterpriseConnector',
			// 'PlnDeleteLayouts_EnterpriseConnector',
			// 'PlnLogOff_EnterpriseConnector',
			// 'PlnLogOn_EnterpriseConnector',
			// 'PlnModifyAdverts_EnterpriseConnector',
			// 'PlnModifyLayouts_EnterpriseConnector',

// pub services
			// 'PubAbortOperation_EnterpriseConnector',
			// 'PubGetDossierOrder_EnterpriseConnector',
			// 'PubGetDossierURL_EnterpriseConnector',
			// 'PubGetPublishInfo_EnterpriseConnector',
			// 'PubOperationProgress_EnterpriseConnector',
			// 'PubPreviewDossiers_EnterpriseConnector',
			// 'PubPublishDossiers_EnterpriseConnector',
			// 'PubSetPublishInfo_EnterpriseConnector',
			// 'PubUnPublishDossiers_EnterpriseConnector',
			// 'PubUpdateDossierOrder_EnterpriseConnector',
			// 'PubUpdateDossiers_EnterpriseConnector',

// sys services
			// 'SysGetSubApplications_EnterpriseConnector',

// wfl services
			// 'WflAddObjectLabels_EnterpriseConnector',
			// 'WflAutocomplete_EnterpriseConnector',
			// 'WflChangeOnlineStatus_EnterpriseConnector',
			// 'WflChangePassword_EnterpriseConnector',
			// 'WflCheckSpelling_EnterpriseConnector',
			// 'WflCheckSpellingAndSuggest_EnterpriseConnector',
			// 'WflCopyObject_EnterpriseConnector',
			// 'WflCreateArticleWorkspace_EnterpriseConnector',
			// 'WflCreateObjectLabels_EnterpriseConnector',
			// 'WflCreateObjectRelations_EnterpriseConnector',
			// 'WflCreateObjects_EnterpriseConnector',
			// 'WflCreateObjectTargets_EnterpriseConnector',
			// 'WflDeleteArticleWorkspace_EnterpriseConnector',
			// 'WflDeleteObjectLabels_EnterpriseConnector',
			// 'WflDeleteObjectRelations_EnterpriseConnector',
			// 'WflDeleteObjects_EnterpriseConnector',
			// 'WflDeleteObjectTargets_EnterpriseConnector',
			// 'WflGetArticleFromWorkspace_EnterpriseConnector',
			// 'WflGetDialog2_EnterpriseConnector',
			// 'WflGetObjectRelations_EnterpriseConnector',
			// 'WflGetObjects_EnterpriseConnector',
			// 'WflGetPages_EnterpriseConnector',
			// 'WflGetPagesInfo_EnterpriseConnector',
			// 'WflGetServers_EnterpriseConnector',
			// 'WflGetStates_EnterpriseConnector',
			// 'WflGetSuggestions_EnterpriseConnector',
			// 'WflGetVersion_EnterpriseConnector',
			// 'WflListArticleWorkspaces_EnterpriseConnector',
			// 'WflListVersions_EnterpriseConnector',
			// 'WflLogOff_EnterpriseConnector',
			// 'WflLogOn_EnterpriseConnector',
			// 'WflNamedQuery_EnterpriseConnector',
			// 'WflPreviewArticleAtWorkspace_EnterpriseConnector',
			// 'WflQueryObjects_EnterpriseConnector',
			// 'WflRemoveObjectLabels_EnterpriseConnector',
			// 'WflRestoreObjects_EnterpriseConnector',
			// 'WflRestoreVersion_EnterpriseConnector',
			// 'WflSaveArticleInWorkspace_EnterpriseConnector',
			// 'WflSaveObjects_EnterpriseConnector',
			// 'WflSendMessages_EnterpriseConnector',
			// 'WflSendTo_EnterpriseConnector',
			// 'WflSetObjectProperties_EnterpriseConnector',
			// 'WflSuggestions_EnterpriseConnector',
			// 'WflUnlockObjects_EnterpriseConnector',
			// 'WflUpdateObjectLabels_EnterpriseConnector',
			// 'WflUpdateObjectRelations_EnterpriseConnector',
			// 'WflUpdateObjectTargets_EnterpriseConnector',

// business connectors
			// 'AdminProperties_EnterpriseConnector',
			// 'AutocompleteProvider_EnterpriseConnector',
			// 'ContentSource_EnterpriseConnector',
			// 'CustomObjectMetaData_EnterpriseConnector',
			// 'DataSource_EnterpriseConnector',
			// 'MetaData_EnterpriseConnector',
			// 'NameValidation_EnterpriseConnector',
			// 'Preview_EnterpriseConnector',
			// 'PubPublishing_EnterpriseConnector',
			// 'Search_EnterpriseConnector',
			// 'ServerJob_EnterpriseConnector',
			// 'Session_EnterpriseConnector',
			// 'Spelling_EnterpriseConnector',
			// 'SuggestionProvider_EnterpriseConnector',
			// 'Version_EnterpriseConnector',
			// 'WebApps_EnterpriseConnector',

		);
		
		if (file_exists(BASEDIR . '/server/interfaces/plugins/connectors/WebApps_EnterpriseConnector.class.php')) {
			$connectors[] = 'WebApps_EnterpriseConnector';
		}	
		
		return $connectors;
	}
}