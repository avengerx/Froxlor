<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Formfields
 *
 */

return array(
	'domain_adddns' => array(
		'title' => $lng['domains']['subdomain_adddns'],
		'image' => 'icons/domain_add.png',
		'sections' => array(
			'section_a' => array(
				'title' => $lng['domains']['subdomain_adddns'],
				'title' => "Add DNS Entry",
				'image' => 'icons/domain_add.png',
				'fields' => array(
					'domain' => array(
						'label' => $lng['domains']['domainname'],
						'type' => 'select',
						'select_var' => $domains
					),
					'dnsentry' => array(
						'label' => $lng['domains']['dnsentry'],
						'type' => 'textul',
						'ul_field' => ''
					),
					'dnsrectype' => array(
						'label' => $lng['domains']['dnsrectype'],
						'type' => 'select',
						'select_var' => $dnsentrytypes
					),
					'dnsdest' => array(
						'label' => $lng['domains']['dnsdest'],
						'desc' => $lng['domains']['dnsdest_desc'],
						'type' => 'textul',
						'ul_field' => '',
					)
				)
			)
		)
	)
);
