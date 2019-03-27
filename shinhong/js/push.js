var title = 'Simple Title';
var options = {
  body: 'Simple piece of body text.\nSecond line of body text :)'
	  vibrate: [500,110,500,110,450,110,200,110,170,40,450,110,200,110,170,40,500]
	  image: '/images/demos/unsplash-farzad-nazifi-1600x1100.jpg'
};
var examplePage = '/demos/notification-examples/example-page.html';
var promiseChain = clients.openWindow(examplePage);
event.waitUntil(promiseChain);
registration.showNotification(title, options);
