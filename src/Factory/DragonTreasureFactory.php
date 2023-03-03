<?php

namespace App\Factory;

use App\Entity\DragonTreasure;
use App\Repository\DragonTreasureRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<DragonTreasure>
 *
 * @method        DragonTreasure|Proxy create(array|callable $attributes = [])
 * @method static DragonTreasure|Proxy createOne(array $attributes = [])
 * @method static DragonTreasure|Proxy find(object|array|mixed $criteria)
 * @method static DragonTreasure|Proxy findOrCreate(array $attributes)
 * @method static DragonTreasure|Proxy first(string $sortedField = 'id')
 * @method static DragonTreasure|Proxy last(string $sortedField = 'id')
 * @method static DragonTreasure|Proxy random(array $attributes = [])
 * @method static DragonTreasure|Proxy randomOrCreate(array $attributes = [])
 * @method static DragonTreasureRepository|RepositoryProxy repository()
 * @method static DragonTreasure[]|Proxy[] all()
 * @method static DragonTreasure[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static DragonTreasure[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static DragonTreasure[]|Proxy[] findBy(array $attributes)
 * @method static DragonTreasure[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static DragonTreasure[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class DragonTreasureFactory extends ModelFactory
{
    private const TREASURE_NAMES = ['test', 'best', 'try'];

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'coolFactor' => self::faker()->numberBetween(1,10),
//            'createdAt' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'description' => self::faker()->paragraph(),
            'isPublished' => self::faker()->boolean(),
            'name' => self::faker()->randomElement(self::TREASURE_NAMES),
            'value' => self::faker()->numberBetween(100,2000),
//            'owner_relation' => UserFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(DragonTreasure $dragonTreasure): void {})
        ;
    }

    protected static function getClass(): string
    {
        return DragonTreasure::class;
    }
}
