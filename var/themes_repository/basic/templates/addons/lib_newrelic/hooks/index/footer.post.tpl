{if extension_loaded('newrelic') && ini_get('newrelic.browser_monitoring.auto_instrument') && $addons.lib_newrelic.nr_enable}
	{$nr_footer = newrelic_get_browser_timing_footer()}

	{$nr_footer nofilter}
{/if}