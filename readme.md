<h1 align="center">Amnesty Fotowedstrijd</h1>


## About

This was a project for Amnesty International in the Netherlands. They wanted to hold a photo contest, and wanted an enviroment for it. We have decided to help them with it, and created this site with Laravel.

## Features

To be able to make this contest work, there was a need for several important features. One of them was the photo upload. We have set the maximum file size of the photo upload to 2mb, because we do not know what the file upload limit is of Amnesty's servers. 2mb is a safe margin. Also added to this photo upload is reading the exif of the uploaded photo.

Together with this photo upload, users have the permission to modify the data of their photos. While we do not allow them to change their uploaded photo itself, they can submit several photos.

Besides the photos features, people have to create an account. This is required to upload photos. Also, Jury members and Site Admins also log in here. Site Admins have a special area where they can edit the contest data, ban users that break the general rules, and select who the jury is.

With all this, we did decide to secure some routes. While some of them are open to registered users, several had to be admin only access.

## The Team

Our team consisted out of 3 people.

- **[Esmeralda Holman](https://github.com/Esjes)**
- **[Daisy Jong](https://github.com/JongCreative)**
- **[Erwin Korsten](https://github.com/Aureus_Lunae)**

## Licenses

The Laravel framework and this site is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
