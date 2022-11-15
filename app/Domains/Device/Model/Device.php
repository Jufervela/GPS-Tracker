<?php declare(strict_types=1);

namespace App\Domains\Device\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Domains\Device\Model\Builder\Device as Builder;
use App\Domains\DeviceAlarm\Model\DeviceAlarm as DeviceAlarmModel;
use App\Domains\DeviceAlarm\Model\DeviceAlarmNotification as DeviceAlarmNotificationModel;
use App\Domains\DeviceMessage\Model\DeviceMessage as DeviceMessageModel;
use App\Domains\SharedApp\Model\ModelAbstract;
use App\Domains\Timezone\Model\Timezone as TimezoneModel;
use App\Domains\Trip\Model\Trip as TripModel;

class Device extends ModelAbstract
{
    /**
     * @var string
     */
    protected $table = 'device';

    /**
     * @const string
     */
    public const TABLE = 'device';

    /**
     * @const string
     */
    public const FOREIGN = 'device_id';

    /**
     * @param \Illuminate\Database\Query\Builder $q
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($q)
    {
        return new Builder($q);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alarms(): HasMany
    {
        return $this->hasMany(DeviceAlarmModel::class, static::FOREIGN);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alarmsNotifications(): HasMany
    {
        return $this->hasMany(DeviceAlarmNotificationModel::class, static::FOREIGN);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages(): HasMany
    {
        return $this->hasMany(DeviceMessageModel::class, static::FOREIGN);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timezone(): BelongsTo
    {
        return $this->belongsTo(TimezoneModel::class, TimezoneModel::FOREIGN)->select('id', 'zone');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trips(): HasMany
    {
        return $this->hasMany(TripModel::class, static::FOREIGN);
    }
}
