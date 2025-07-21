# Cloudjet-Waf-Agent
The WafAgent class is designed to extract browser fingerprinting data from client-side cookies, aiding in request analysis and bot detection within a Web Application Firewall (WAF) system.
The WafAgent class is part of a Web Application Firewall (WAF) system designed to extract and manage specific client-side fingerprinting information using cookies. This helps in identifying potential threats such as automated bots or suspicious browsing behavior.

🧩 Purpose:
This class captures environmental and behavioral indicators from the client via HTTP cookies, including:

User's timezone

Whether the client is automated using Selenium

The allowed client IP address

This data aids in behavioral analysis and rule-based filtering in WAF systems.

⚙️ Features:

$wafAgent = new WafAgent();


Method getTimezone()
//Returns the stored timezone of the client.

Method isUsingSelenium()
Indicates whether the request was likely generated using automation (Selenium).

Method getClientIP()
//Returns the allowed client IP (from cookie).

Method getInfo()
//Returns a structured array of all available attributes:

[
  'timezone' => 'Africa/Cairo',
  'usingSelenium' => false,
  'clientip' => '192.168.1.100'
]
