<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tutor;
use Faker\Factory as Faker;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        $subjects = [
            'Mathematics', 'Physics', 'Chemistry', 'Biology', 'English', 
            'History', 'Geography', 'Computer Science', 'Programming', 
            'Economics', 'Business Studies', 'Accounting', 'Art', 'Music',
            'French', 'Spanish', 'German', 'Statistics', 'Calculus', 'Algebra'
        ];
        
        $levels = [
            'Elementary', 'Middle School', 'High School', 'College', 
            'University', 'Adult Education', 'Professional Development'
        ];
        
        $cities = [
            'Phnom Penh', 'Siem Reap', 'Battambang', 'Kampong Cham', 
            'Kampong Thom', 'Kampot', 'Sihanoukville', 'Banteay Meanchey'
        ];
        
        $states = [
            'Phnom Penh', 'Siem Reap', 'Battambang', 'Kampong Cham', 
            'Kampong Thom', 'Kampot', 'Preah Sihanouk', 'Banteay Meanchey'
        ];

        // Professional tutor image URLs from various sources
        $professionalImages = [
            'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1494790108755-2616b612b5bb?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1517841905240-472917c472ef?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1507591064344-4c6ce005b128?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1566492031773-4f4e44671d66?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=400&fit=crop&crop=face',
            'https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?w=400&h=400&fit=crop&crop=face',
        ];

        // Create 50 sample tutors
        for ($i = 0; $i < 50; $i++) {
            $hourlyRate = $faker->randomFloat(2, 5, 50);
            $selectedSubjects = $faker->randomElements($subjects, $faker->numberBetween(1, 4));
            $selectedLevels = $faker->randomElements($levels, $faker->numberBetween(1, 3));
            $city = $faker->randomElement($cities);
            $state = $faker->randomElement($states);
            
            Tutor::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'phone' => $faker->phoneNumber(),
                'bio' => $faker->paragraph(3),
                'profile_image' => $faker->randomElement($professionalImages),
                'subjects' => $selectedSubjects,
                'levels' => $selectedLevels,
                'education' => $faker->randomElement([
                    'Bachelor of Science in Mathematics',
                    'Master of Arts in English Literature',
                    'PhD in Physics',
                    'Bachelor of Education',
                    'Master of Science in Computer Science',
                    'Bachelor of Arts in History',
                    'Master of Business Administration',
                    'Bachelor of Science in Chemistry'
                ]),
                'experience_years' => $faker->numberBetween(0, 15),
                'hourly_rate' => $hourlyRate,
                'min_rate' => $hourlyRate * 0.8,
                'max_rate' => $hourlyRate * 1.2,
                'availability' => [
                    'monday' => $faker->randomElements(['morning', 'afternoon', 'evening'], $faker->numberBetween(0, 3)),
                    'tuesday' => $faker->randomElements(['morning', 'afternoon', 'evening'], $faker->numberBetween(0, 3)),
                    'wednesday' => $faker->randomElements(['morning', 'afternoon', 'evening'], $faker->numberBetween(0, 3)),
                    'thursday' => $faker->randomElements(['morning', 'afternoon', 'evening'], $faker->numberBetween(0, 3)),
                    'friday' => $faker->randomElements(['morning', 'afternoon', 'evening'], $faker->numberBetween(0, 3)),
                    'saturday' => $faker->randomElements(['morning', 'afternoon', 'evening'], $faker->numberBetween(0, 2)),
                    'sunday' => $faker->randomElements(['morning', 'afternoon', 'evening'], $faker->numberBetween(0, 2)),
                ],
                'is_available' => $faker->boolean(85), // 85% chance of being available
                'city' => $city,
                'state' => $state,
                'country' => 'Cambodia',
                'latitude' => $faker->latitude(10, 15),
                'longitude' => $faker->longitude(102, 108),
                'online_tutoring' => $faker->boolean(70),
                'in_person_tutoring' => $faker->boolean(80),
                'rating' => $faker->randomFloat(2, 3.0, 5.0),
                'total_reviews' => $faker->numberBetween(0, 150),
                'total_students' => $faker->numberBetween(0, 200),
                'is_verified' => $faker->boolean(60),
                'is_active' => $faker->boolean(90),
                'last_active_at' => $faker->dateTimeBetween('-1 month', 'now'),
            ]);
        }

        // Create some premium tutors with high ratings
        for ($i = 0; $i < 10; $i++) {
            $hourlyRate = $faker->randomFloat(2, 25, 80);
            $selectedSubjects = $faker->randomElements($subjects, $faker->numberBetween(2, 5));
            $selectedLevels = $faker->randomElements($levels, $faker->numberBetween(2, 4));
            $city = $faker->randomElement($cities);
            $state = $faker->randomElement($states);
            
            Tutor::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'phone' => $faker->phoneNumber(),
                'bio' => $faker->paragraph(4),
                'profile_image' => $faker->randomElement($professionalImages),
                'subjects' => $selectedSubjects,
                'levels' => $selectedLevels,
                'education' => $faker->randomElement([
                    'PhD in Mathematics from Harvard University',
                    'Master of Science in Physics from MIT',
                    'PhD in Computer Science from Stanford',
                    'Master of Arts in English from Oxford University',
                    'PhD in Chemistry from Cambridge University'
                ]),
                'experience_years' => $faker->numberBetween(5, 20),
                'hourly_rate' => $hourlyRate,
                'min_rate' => $hourlyRate * 0.9,
                'max_rate' => $hourlyRate * 1.1,
                'availability' => [
                    'monday' => ['morning', 'afternoon', 'evening'],
                    'tuesday' => ['morning', 'afternoon', 'evening'],
                    'wednesday' => ['morning', 'afternoon', 'evening'],
                    'thursday' => ['morning', 'afternoon', 'evening'],
                    'friday' => ['morning', 'afternoon', 'evening'],
                    'saturday' => ['morning', 'afternoon'],
                    'sunday' => ['afternoon'],
                ],
                'is_available' => true,
                'city' => $city,
                'state' => $state,
                'country' => 'Cambodia',
                'latitude' => $faker->latitude(10, 15),
                'longitude' => $faker->longitude(102, 108),
                'online_tutoring' => true,
                'in_person_tutoring' => true,
                'rating' => $faker->randomFloat(2, 4.5, 5.0),
                'total_reviews' => $faker->numberBetween(50, 300),
                'total_students' => $faker->numberBetween(100, 500),
                'is_verified' => true,
                'is_active' => true,
                'last_active_at' => $faker->dateTimeBetween('-1 week', 'now'),
            ]);
        }
    }
}
