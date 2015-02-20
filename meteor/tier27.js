if (Meteor.isClient) {

  Template.body.helpers({
	services: [
		{
			icon: {
				name: "rocket",
				action: "spin",
			},
			name: "Application Development",
			tag: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.",
		},
		{
			icon: {
				name: "cogs",
				action: "spin",
			},
			name: "API Construction",
			tag: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.",
		},
		{
			icon: {
				name: "cubes",
				action: "spin",
			},
			name: "Startup Consulting",
			tag: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.",
		},
	],
	team: [
		{
			name: "Joshua Kornreich",
			title: "Fouder & Developer",
			image: "img/josh.jpg",
			tag: "I help people build their dreams",
		},
		{
			name: "Ryan Douvlos",
			title: "Fouder & Designer",
			image: "img/ryan.jpg",
			tag: "I paint beautiful landscapes",
		},
		{
			name: "Matt Getz",
			title: "Database Architect",
			image: "img/matt.png",
			tag: "I write the foundation which supports business",
		},
		{
			name: "Dylan Moore",
			title: "Corporate Ambassador",
			image: "img/dylan.png",
			tag: "I connect the world to Tier 27",
		},
		{
			name: "Omar Jatoi",
			title: "System Administrator",
			image: "img/omar.png",
			tag: "I wear the white hat",
		},
		{
			name: "Keith Williams",
			title: "Front End Engineer",
			image: "img/keith.png",
			tag: "I give life to applications",
		},
	]
  });

  Template.service.events({
    'click .name': function (event, template) {
		$target = template.$('.name');
		console.log($target);
		if( $target.children('input').length > 0 ) return;
		name = $target.html()
		$input = $('<input type="invisible">').val(name).width($target.textWidth())
		$target.html($input)
		$input.focus().blur(function() {
			$target.html($input.val())	
		}).keypress(function() {
			//$input.width($input.valWidth())
		});
    }
  });
}

if (Meteor.isServer) {
  Meteor.startup(function () {
    // code to run on server at startup
  });
}
