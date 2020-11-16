<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Constants;

/**
 * Class CurrencyCodes
 *
 * @package Scaleplan\CloudPayments\Constants
 */
final class CurrencyCodes
{
    public const RUB = 'RUB'; //Российский рубль
    public const EUR = 'EUR'; //Евро
    public const USD = 'USD'; //Доллар США
    public const GBP = 'GBP'; //Фунт стерлингов
    public const UAH = 'UAH'; //Украинская гривна
    public const BYN = 'BYN'; //Белорусский рубль
    public const KZT = 'KZT'; //Казахский тенге
    public const AZN = 'AZN'; //Азербайджанский манат
    public const CHF = 'CHF'; //Швейцарский франк
    public const CZK = 'CZK'; //Чешская крона
    public const CAD = 'CAD'; //Канадский доллар
    public const PLN = 'PLN'; //Польский злотый
    public const SEK = 'SEK'; //Шведская крона
    public const TRY = 'TRY'; //Турецкая лира
    public const CNY = 'CNY'; //Китайский юань
    public const INR = 'INR'; //Индийская рупия
    public const BRL = 'BRL'; //Бразильский реал
    public const ZAR = 'ZAR'; //Южноафриканский рэнд
    public const UZS = 'UZS'; //Узбекский сум
    public const BGL = 'BGL'; //Болгарский лев

    public const ALL = [
        self::RUB,
        self::EUR,
        self::USD,
        self::GBP,
        self::UAH,
        self::BYN,
        self::KZT,
        self::AZN,
        self::CHF,
        self::CZK,
        self::CAD,
        self::PLN,
        self::SEK,
        self::TRY,
        self::CNY,
        self::INR,
        self::BRL,
        self::ZAR,
        self::UZS,
        self::BGL,
    ];
}
