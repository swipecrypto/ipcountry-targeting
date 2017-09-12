# ipcountry-targeting


## General Ad Targeting

This series of writings will cover the few targeting capabilities that is built within [SwipeCrypto](https://www.swipecrypto.com) targeting engine.

SwipeCrypto Ad Targeting engine has the capability to deliver targeted advertisement based on:

* IP and Country
* Android system settings (such as user language, timezone, device model, network connectivity, installed app,etc)
* Beacon and Geolocation (latitude and longitude)
* Omnichannel data aggregation and exchange to identify user demographic, interests, income level, and many more

## IP and Country

IP and country targeting is one of the most targeting aspect of [SwipeCrypto](https://www.swipecrypto.com) as not all advertisements are relevants for each country. We can get the country location information based on the requestor IP using either one of these services:

* [Cloudflare](https://www.cloudflare.com) IP Geolocation service
* IP Location webservices such as [IP-API](http://ip-api.com/#), [MaxMind GeoIP services](https://www.maxmind.com/en/geoip2-precision-services)
* IP Location database such as [MaxMind GeoIP Databases](https://www.maxmind.com/en/geoip2-databases)

## SwipeCrypto IP and Country detection

SwipeCrypto uses Cloudflare IP Geolocation service to detect user location. Here are some pre-requisites of using this service:

* Use [Cloudflare](https://www.cloudlare.com) to host your domain. Beside providing IP Geolocation service, Cloudflare also provides CDN services, Security services (such as SSL certificate, IP Firewall, Web Application Firewall, DDOS prevention, Page Rules, Block Access by Country, etc), and integration with third party services (such as Skype, Pinterest, and many more).

* Turn on Cloudflare IP Geolocation service. You will find the option to turn it on under the 'Network' section of the dashboard. The option can be found near the bottom of the page. Please ensure the value of the option is switched to 'On'.

Once you turn that on, you can test out the code provided in ipcountry.php.

Following snippets provide the sample code to retrieve requestor IP address and country. Please note that country code value is provided in ISO 3166-1 Alpha 2 format.

```
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $remote_ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];
    }
```

Thats it! With that few lines of php code, you can get the IP and country of the requestor. You can also try out the demo [here](http://swipecrypto.com/ipcountry.php).