<?php

$mailto = pareena\Mailto\Generator::create()
	->to('pm@pm.gc.ca; premier@novascotia.ca; min@dfo-mpo.gc.ca; min_dfa@gov.ns.ca')
	->subject(' RESPECT TREATY RIGHTS AND ENSURE THE SAFETY OF MI’KMAQ FISHERPEOPLE FACING ATTACKS AND DISCRIMINATION')
	->body('Dear Right Honourable Prime Minister, the Honourable Premier of Nova Scotia, and the Honourable Federal and Provincial Ministers of Fisheries,
 
    Section 35 of the Canadian Constitution recognizes the inherent rights of Aboriginal Peoples to hunt, fish, and gather for food, social and ceremonial purposes. The Peace & Friendship Treaties guarantee the rights of Mi’kmaq to hunt and fish, as affirmed by the Supreme Court of Canada in the R v. Marshall case in 1999.
     
    As set out in Marshall, the Mi’kmaq have a right to fish for a “moderate livelihood.” On September 18, 2020, Sipekne’katik First Nation announced its own self-regulated moderate livelihood fishery, as a sovereign people. Licenses and tags were distributed during a peaceful ceremony and celebration, while more than 50 non-Indigenous fisher boats surrounded the harbour, forming a blockade and infringing on the legal treaty rights of Mi’kmaq peoples.
     
    That evening, Mi’kmaq fisher fleets were just metres offshore checking lobster traps when non-Indigenous fisherpeople began to chase them and fire flares at their boats. Mi’kmaq fisherpeople have faced other forms of harassment and discrimination, including damage to their boats and vehicles, and stolen fishing gear and cut buoy lines. They have been denied goods such as fuel, bait and accommodations at Nova Scotian businesses.
     
    The Bay of Fundy Inshore Fishermen Association issued a statement claiming that Sipekne’katik’s issuance of licenses is “not based in Canadian law” and that “in the absence of law and order good people can be forced to take the law into their own hands and the responsibility for that falls squarely on Minister [of Fisheries] Jordan and her predecessors who have not enforced the rules.”
     
    Treaty rights are Canadian law. This racism is not only unacceptable, it is illegal. All threats and attacks from non-Indigenous fisherpeople must be stopped and prosecuted to the fullest extent of the law.
     
    It is the duty of the Canadian provincial and federal governments to uphold the inherent rights of Indigenous peoples, as per section 35 of the Constitution, the 1752 Peace & Friendship Treaty, and attendant case law. I call on your governments to:
     
    (1)   Uphold the rule of law and respect treaty rights
    (2)   Address the threats, attacks and discrimination against Mi’kmaq peoples, including from DFO Officials who have unjustly criminalized Mi’kmaq lobster harvesters
    (3)   Ensure the safety and security of Mi’kmaq people as they exercise their legal treaty rights
     
    I look forward to hearing the response of your governments. Thank you for your consideration.
     
    [NAME]
    ');

?>

<a href="<?php echo $mailto; ?>">Send email!</a>