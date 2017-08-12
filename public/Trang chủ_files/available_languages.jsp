







AUI.add(
	'portal-available-languages',
	function(A) {
		var available = {};

		var direction = {};

		

			available['zh_CN'] = 'Chinese (China)';
			direction['zh_CN'] = 'ltr';

		

			available['es_ES'] = 'Spanish (Spain)';
			direction['es_ES'] = 'ltr';

		

			available['ja_JP'] = 'Japanese (Japan)';
			direction['ja_JP'] = 'ltr';

		

			available['nl_NL'] = 'Dutch (Netherlands)';
			direction['nl_NL'] = 'ltr';

		

			available['hu_HU'] = 'Hungarian (Hungary)';
			direction['hu_HU'] = 'ltr';

		

			available['pt_BR'] = 'Portuguese (Brazil)';
			direction['pt_BR'] = 'ltr';

		

			available['de_DE'] = 'German (Germany)';
			direction['de_DE'] = 'ltr';

		

			available['iw_IL'] = 'Hebrew (Israel)';
			direction['iw_IL'] = 'rtl';

		

			available['fi_FI'] = 'Finnish (Finland)';
			direction['fi_FI'] = 'ltr';

		

			available['ca_ES'] = 'Catalan (Spain)';
			direction['ca_ES'] = 'ltr';

		

			available['fr_FR'] = 'French (France)';
			direction['fr_FR'] = 'ltr';

		

			available['en_US'] = 'English (United States)';
			direction['en_US'] = 'ltr';

		

		Liferay.Language.available = available;
		Liferay.Language.direction = direction;
	},
	'',
	{
		requires: ['liferay-language']
	}
);