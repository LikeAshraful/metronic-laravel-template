<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $permissions = [
            ['name' => 'patient.index', 'guard_name' => 'web'],
            ['name' => 'patient.create', 'guard_name' => 'web'],
            ['name' => 'patient.view', 'guard_name' => 'web'],
            ['name' => 'patient.edit', 'guard_name' => 'web'],
            ['name' => 'patient.delete', 'guard_name' => 'web'],

            ['name' => 'patient.nurse.assign', 'guard_name' => 'web'],
            ['name' => 'patient.house.assign', 'guard_name' => 'web'],

            ['name' => 'patient.skip.reason', 'guard_name' => 'web'],
            ['name' => 'patient.skip.view', 'guard_name' => 'web'],
            ['name' => 'patient.skip.delete', 'guard_name' => 'web'],

            ['name' => 'patient.passenger.index', 'guard_name' => 'web'],
            ['name' => 'patient.passenger.create', 'guard_name' => 'web'],
            ['name' => 'patient.passenger.delete', 'guard_name' => 'web'],


            // driver
            ['name' => 'driver.index', 'guard_name' => 'web'],
            ['name' => 'driver.route', 'guard_name' => 'web'],
            ['name' => 'driver.route.view', 'guard_name' => 'web'],
            ['name' => 'driver.create', 'guard_name' => 'web'],
            ['name' => 'driver.view', 'guard_name' => 'web'],
            ['name' => 'driver.edit', 'guard_name' => 'web'],
            ['name' => 'driver.delete', 'guard_name' => 'web'],
            ['name' => 'driver.emergency', 'guard_name' => 'web'],
            ['name' => 'driver.emergency.approve', 'guard_name' => 'web'],
            ['name' => 'driver.trip.list', 'guard_name' => 'web'],

            // house
            ['name' => 'house.index', 'guard_name' => 'web'],
            ['name' => 'house.create', 'guard_name' => 'web'],
            ['name' => 'house.edit', 'guard_name' => 'web'],
            ['name' => 'house.delete', 'guard_name' => 'web'],
            ['name' => 'house.patients', 'guard_name' => 'web'],
            ['name' => 'house.patient.assign', 'guard_name' => 'web'],

            // vehicle
            ['name' => 'vehicle.index', 'guard_name' => 'web'],
            ['name' => 'vehicle.create', 'guard_name' => 'web'],
            ['name' => 'vehicle.view', 'guard_name' => 'web'],
            ['name' => 'vehicle.edit', 'guard_name' => 'web'],
            ['name' => 'vehicle.delete', 'guard_name' => 'web'],

            // vehicle type
            ['name' => 'vehicle.type.index', 'guard_name' => 'web'],
            ['name' => 'vehicle.type.create', 'guard_name' => 'web'],
            ['name' => 'vehicle.type.view', 'guard_name' => 'web'],
            ['name' => 'vehicle.type.edit', 'guard_name' => 'web'],
            ['name' => 'vehicle.type.delete', 'guard_name' => 'web'],

            // Morning Lectures
            ['name' => 'morning.lecture.index', 'guard_name' => 'web'],
            ['name' => 'morning.lecture.create', 'guard_name' => 'web'],
            ['name' => 'morning.lecture.view', 'guard_name' => 'web'],
            ['name' => 'morning.lecture.edit', 'guard_name' => 'web'],
            ['name' => 'morning.lecture.delete', 'guard_name' => 'web'],
            ['name' => 'morning.lecture.patient.assign', 'guard_name' => 'web'],
            ['name' => 'morning.lecture.patient.index', 'guard_name' => 'web'],
            ['name' => 'morning.lecture.patient.delete', 'guard_name' => 'web'],

            // Time Shift
            ['name' => 'time.shift.index', 'guard_name' => 'web'],
            ['name' => 'time.shift.create', 'guard_name' => 'web'],
            ['name' => 'time.shift.view', 'guard_name' => 'web'],
            ['name' => 'time.shift.edit', 'guard_name' => 'web'],
            ['name' => 'time.shift.delete', 'guard_name' => 'web'],


            // location
            ['name' => 'location.index', 'guard_name' => 'web'],
            ['name' => 'location.create', 'guard_name' => 'web'],
            ['name' => 'location.edit', 'guard_name' => 'web'],
            ['name' => 'location.view', 'guard_name' => 'web'],
            ['name' => 'location.delete', 'guard_name' => 'web'],

            // nurse
            ['name' => 'nurse.index', 'guard_name' => 'web'],
            ['name' => 'nurse.create', 'guard_name' => 'web'],
            ['name' => 'nurse.edit', 'guard_name' => 'web'],
            ['name' => 'nurse.delete', 'guard_name' => 'web'],
            ['name' => 'nurse.patient.assign', 'guard_name' => 'web'],


            // transport.request
            ['name' => 'transport.request.index', 'guard_name' => 'web'],
            ['name' => 'transport.request.assign.driver', 'guard_name' => 'web'],
            ['name' => 'transport.request.set.time', 'guard_name' => 'web'],
            ['name' => 'transport.request.approve', 'guard_name' => 'web'],
            ['name' => 'transport.request.decline', 'guard_name' => 'web'],

            // Maintenance Request
            ['name' => 'maintenance.request.index', 'guard_name' => 'web'],
            ['name' => 'maintenance.request.approve', 'guard_name' => 'web'],
            ['name' => 'maintenance.request.decline', 'guard_name' => 'web'],


            // reason
            ['name' => 'maintenance.service.index', 'guard_name' => 'web'],
            ['name' => 'maintenance.service.create', 'guard_name' => 'web'],
            ['name' => 'maintenance.service.edit', 'guard_name' => 'web'],
            ['name' => 'maintenance.service.delete', 'guard_name' => 'web'],

            // Psychiatrist request
            ['name' => 'psychiatrist.request.index', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.request.approve', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.request.decline', 'guard_name' => 'web'],

            // psychiatrist
            ['name' => 'psychiatrist.index', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.create', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.edit', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.delete', 'guard_name' => 'web'],

            // psychiatrist time shift
            ['name' => 'psychiatrist.time.shift.index', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.time.shift.create', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.time.shift.view', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.time.shift.edit', 'guard_name' => 'web'],
            ['name' => 'psychiatrist.time.shift.delete', 'guard_name' => 'web'],

            // reason
            ['name' => 'reason.index', 'guard_name' => 'web'],
            ['name' => 'reason.create', 'guard_name' => 'web'],
            ['name' => 'reason.edit', 'guard_name' => 'web'],
            ['name' => 'reason.delete', 'guard_name' => 'web'],

            // about
            ['name' => 'about.page', 'guard_name' => 'web'],
            ['name' => 'privacy.policy.page', 'guard_name' => 'web'],
            ['name' => 'mission.values.page', 'guard_name' => 'web'],

            ['name' => 'faqs.index', 'guard_name' => 'web'],
            ['name' => 'faqs.create', 'guard_name' => 'web'],
            ['name' => 'faqs.edit', 'guard_name' => 'web'],
            ['name' => 'faqs.delete', 'guard_name' => 'web'],

            // PERMISSIONS/ROLES
            ['name' => 'user.index', 'guard_name' => 'web'],
            ['name' => 'user.create', 'guard_name' => 'web'],
            ['name' => 'user.edit', 'guard_name' => 'web'],
            ['name' => 'user.delete', 'guard_name' => 'web'],

            ['name' => 'role.index', 'guard_name' => 'web'],
            ['name' => 'role.create', 'guard_name' => 'web'],
            ['name' => 'role.edit', 'guard_name' => 'web'],
            ['name' => 'role.delete', 'guard_name' => 'web'],

            // emergency-reason
            ['name' => 'emergency-reason.index', 'guard_name' => 'web'],
            ['name' => 'emergency-reason.create', 'guard_name' => 'web'],
            ['name' => 'emergency-reason.edit', 'guard_name' => 'web'],
            ['name' => 'emergency-reason.delete', 'guard_name' => 'web'],

            ['name' => 'report.generate', 'guard_name' => 'web'],
        ];
        foreach ($permissions as $permission) {
            Permission::updateOrInsert(
                ['name' => $permission['name']],
                $permission
            );
        }
        // Permission::insert($permissions);
    }
}
