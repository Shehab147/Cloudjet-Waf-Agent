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
Constructor __construct()
Initializes the object using cookie data:

timezone – The client's timezone ($_COOKIE['timezone']), or 'Unknown' if unavailable.

usingSelenium – Boolean flag derived from $_COOKIE['usingSelenium'].

clinetip – IP address stored in $_COOKIE['allowed'].

Method getTimezone()
Returns the stored timezone of the client.

Method isUsingSelenium()
Indicates whether the request was likely generated using automation (Selenium).

Method getClinetipIP()
Returns the allowed client IP (from cookie).

Method getInfo()
Returns a structured array of all available attributes:

php
Copy
Edit
[
  'timezone' => 'Africa/Cairo',
  'usingSelenium' => false,
  'clinetip' => '192.168.1.100'
]
