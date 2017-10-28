<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id'           => 1,
            'title'        => 'We will constantly strive',
            'subtitle'     => 'Provide worldwide knowledge products for today\'s capital-based eCompanies',
            'body'         => 'Fusce vitae lobortis augue. Curabitur luctus a sem nec semper. Morbi id varius sapien. Morbi quis tortor sed nibh posuere congue. Fusce velit ex, elementum et euismod quis, sodales in est. Etiam fringilla justo sit amet leo laoreet, at aliquam justo dignissim. Ut sit amet congue est. Nullam elementum arcu non massa tempor, vitae porttitor magna aliquet. Aliquam in urna semper, accumsan nulla quis, blandit ex. Nam nec posuere lectus. In ac tortor ultricies, ultricies ipsum at, viverra diam. Suspendisse vel eros hendrerit, tempor erat vel, commodo nunc. Nam vel orci a justo lacinia commodo. Nullam sed lobortis odio. Nulla et purus imperdiet, ornare mi ut, congue orci. Nullam quis vehicula dui. Cras sollicitudin interdum metus, sit amet luctus nisl interdum vitae. Vestibulum et elit nec nunc fermentum tempor. Morbi quam metus, tempor eu justo eu, imperdiet vulputate lorem.',
            'published_at' => \Carbon\Carbon::now(),
            'author_id'    => 1,
        ]);

        DB::table('posts')->insert([
            'id'           => 2,
            'title'        => 'We will continue to leverage virtual data implementations',
            'subtitle'     => '...for today\'s web economy virtual companies',
            'body'         => 'Fusce vitae lobortis augue. Curabitur luctus a sem nec semper. Morbi id varius sapien. Morbi quis tortor sed nibh posuere congue. Fusce velit ex, elementum et euismod quis, sodales in est. Etiam fringilla justo sit amet leo laoreet, at aliquam justo dignissim. Ut sit amet congue est. Nullam elementum arcu non massa tempor, vitae porttitor magna aliquet. Aliquam in urna semper, accumsan nulla quis, blandit ex. Nam nec posuere lectus. In ac tortor ultricies, ultricies ipsum at, viverra diam. Suspendisse vel eros hendrerit, tempor erat vel, commodo nunc. Nam vel orci a justo lacinia commodo. Nullam sed lobortis odio. Nulla et purus imperdiet, ornare mi ut, congue orci. Nullam quis vehicula dui. Cras sollicitudin interdum metus, sit amet luctus nisl interdum vitae. Vestibulum et elit nec nunc fermentum tempor. Morbi quam metus, tempor eu justo eu, imperdiet vulputate lorem.',
            'published_at' => \Carbon\Carbon::now(),
            'author_id'    => 1,
        ]);

        DB::table('posts')->insert([
            'id'           => 3,
            'title'        => 'The objectivity of nihilism is upon closer',
            'subtitle'     => 'examination almost open-minded in its omnipotence.',
            'body'         => 'Fusce vitae lobortis augue. Curabitur luctus a sem nec semper. Morbi id varius sapien. Morbi quis tortor sed nibh posuere congue. Fusce velit ex, elementum et euismod quis, sodales in est. Etiam fringilla justo sit amet leo laoreet, at aliquam justo dignissim. Ut sit amet congue est. Nullam elementum arcu non massa tempor, vitae porttitor magna aliquet. Aliquam in urna semper, accumsan nulla quis, blandit ex. Nam nec posuere lectus. In ac tortor ultricies, ultricies ipsum at, viverra diam. Suspendisse vel eros hendrerit, tempor erat vel, commodo nunc. Nam vel orci a justo lacinia commodo. Nullam sed lobortis odio. Nulla et purus imperdiet, ornare mi ut, congue orci. Nullam quis vehicula dui. Cras sollicitudin interdum metus, sit amet luctus nisl interdum vitae. Vestibulum et elit nec nunc fermentum tempor. Morbi quam metus, tempor eu justo eu, imperdiet vulputate lorem.',
            'published_at' => \Carbon\Carbon::now(),
            'author_id'    => 1,
        ]);

        DB::table('posts')->insert([
            'id'           => 4,
            'title'        => 'Defaulted bonds',
            'subtitle'     => 'Bonds in  the Asian sector, never redistribute them.',
            'body'         => 'Fusce vitae lobortis augue. Curabitur luctus a sem nec semper. Morbi id varius sapien. Morbi quis tortor sed nibh posuere congue. Fusce velit ex, elementum et euismod quis, sodales in est. Etiam fringilla justo sit amet leo laoreet, at aliquam justo dignissim. Ut sit amet congue est. Nullam elementum arcu non massa tempor, vitae porttitor magna aliquet. Aliquam in urna semper, accumsan nulla quis, blandit ex. Nam nec posuere lectus. In ac tortor ultricies, ultricies ipsum at, viverra diam. Suspendisse vel eros hendrerit, tempor erat vel, commodo nunc. Nam vel orci a justo lacinia commodo. Nullam sed lobortis odio. Nulla et purus imperdiet, ornare mi ut, congue orci. Nullam quis vehicula dui. Cras sollicitudin interdum metus, sit amet luctus nisl interdum vitae. Vestibulum et elit nec nunc fermentum tempor. Morbi quam metus, tempor eu justo eu, imperdiet vulputate lorem.',
            'published_at' => \Carbon\Carbon::now(),
            'author_id'    => 2,
        ]);

        DB::table('posts')->insert([
            'id'           => 5,
            'title'        => 'The wise trader these days will always securitize senior-rated.',
            'subtitle'     => null,
            'body'         => 'Fusce vitae lobortis augue. Curabitur luctus a sem nec semper. Morbi id varius sapien. Morbi quis tortor sed nibh posuere congue. Fusce velit ex, elementum et euismod quis, sodales in est. Etiam fringilla justo sit amet leo laoreet, at aliquam justo dignissim. Ut sit amet congue est. Nullam elementum arcu non massa tempor, vitae porttitor magna aliquet. Aliquam in urna semper, accumsan nulla quis, blandit ex. Nam nec posuere lectus. In ac tortor ultricies, ultricies ipsum at, viverra diam. Suspendisse vel eros hendrerit, tempor erat vel, commodo nunc. Nam vel orci a justo lacinia commodo. Nullam sed lobortis odio. Nulla et purus imperdiet, ornare mi ut, congue orci. Nullam quis vehicula dui. Cras sollicitudin interdum metus, sit amet luctus nisl interdum vitae. Vestibulum et elit nec nunc fermentum tempor. Morbi quam metus, tempor eu justo eu, imperdiet vulputate lorem.',
            'published_at' => \Carbon\Carbon::now(),
            'author_id'    => 2,
        ]);

        DB::table('posts')->insert([
            'id'           => 6,
            'title'        => 'When I\'m elected, I\'ll make sure Hollywood',
            'subtitle'     => 'Liberals and internet pirates cannot take away our brave police force.',
            'body'         => 'Fusce vitae lobortis augue. Curabitur luctus a sem nec semper. Morbi id varius sapien. Morbi quis tortor sed nibh posuere congue. Fusce velit ex, elementum et euismod quis, sodales in est. Etiam fringilla justo sit amet leo laoreet, at aliquam justo dignissim. Ut sit amet congue est. Nullam elementum arcu non massa tempor, vitae porttitor magna aliquet. Aliquam in urna semper, accumsan nulla quis, blandit ex. Nam nec posuere lectus. In ac tortor ultricies, ultricies ipsum at, viverra diam. Suspendisse vel eros hendrerit, tempor erat vel, commodo nunc. Nam vel orci a justo lacinia commodo. Nullam sed lobortis odio. Nulla et purus imperdiet, ornare mi ut, congue orci. Nullam quis vehicula dui. Cras sollicitudin interdum metus, sit amet luctus nisl interdum vitae. Vestibulum et elit nec nunc fermentum tempor. Morbi quam metus, tempor eu justo eu, imperdiet vulputate lorem.',
            'published_at' => \Carbon\Carbon::now(),
            'author_id'    => 3,
        ]);
    }
}
