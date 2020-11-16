<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Constants;

/**
 * Class ErrorCodes
 *
 * @package Scaleplan\CloudPayments\Constants
 */
class ErrorCodes
{
    public const REFER_TO_CARD_ISSUER            = 5001; // Отказ эмитента проводить онлайн операцию - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const INVALID_MERCHANT                = 5003; // Отказ эмитента проводить онлайн операцию - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const PICK_UP_CARD                    = 5004; // Карта потеряна - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const DO_NOT_HONOR                    = 5005; // Отказ эмитента без объяснения - причин
    public const ERROR                           = 5006; // Отказ сети проводить операцию или неправильный CVV код - Проверьте правильность введенных данных карты или воспользуйтесь другой картой
    public const PICK_UP_CARD_SPECIAL_CONDITIONS = 5007; // Карта потеряна - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const INVALID_TRANSACTION             = 5012; // Карта не предназначена для онлайн платежей - Воспользуйтесь другой картой или свяжитесь с банком, выпустившим карту
    public const AMOUNT_ERROR                    = 5013; // Слишком маленькая или слишком большая сумма операции - Проверьте корректность суммы
    public const INVALID_CARD_NUMBER             = 5014; // Некорректный номер карты - Проверьте правильность введенных данных карты или воспользуйтесь другой картой
    public const NO_SUCH_ISSUER                  = 5015; // Эмитент не найден - Проверьте правильность введенных данных карты или воспользуйтесь другой картой
    public const TRANSACTION_ERROR               = 5019; // Отказ эмитента без объяснения - причин
    public const FORMAT_ERROR                    = 5030; // Ошибка на стороне эквайера — неверно сформирована транзакция - Повторите попытку позже
    public const BANK_NOT_SUPPORTED_BY_SWITCH    = 5031; // Неизвестный эмитент карты - Воспользуйтесь другой картой
    public const EXPIRED_CARD_PICKUP             = 5033; // Истёк срок утери карты	- Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const SUSPECTED_FRAUD                 = 5034; // Отказ эмитента — подозрение на мошенничество - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const RESTRICTED_CARD                 = 5036; // Карта не предназначена для платежей - Платежи для этой карты запрещены. Попробуйте другую карту
    public const LOST_CARD                       = 5041; // Карта потеряна - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const STOLEN_CARD                     = 5043; // Карта украдена - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const INSUFFICIENT_FUNDS              = 5051; // Недостаточно средств - Недостаточно средств на карте
    public const EXPIRED_CARD                    = 5054; // Карта просрочена или неверно указан срок действия - Проверьте правильность введенных данных карты или воспользуйтесь другой картой
    public const TRANSACTION_NOT_PERMITTED       = 5057; // Ограничение на - карте
    public const RESTRICTED_CARD_2               = 5062; // Карта не предназначена для платежей - Платежи для этой карты запрещены. Попробуйте другую карту
    public const SECURITY_VIOLATION              = 5063; // Карта заблокирована из-за нарушений безопасности - Воспользуйтесь другой картой
    public const EXCEED_WITHDRAWAL_FREQUENCY     = 5065; // Превышен лимит операций по карте - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const INCORRECT_CVV                   = 5082; // Неверный CVV код - Неверно указан код CVV
    public const TIMEOUT                         = 5091; // Эмитент недоступен - Повторите попытку позже или воспользуйтесь другой картой
    public const CANNOT_REACH_NETWORK            = 5092; // Эмитент недоступен - Повторите попытку позже или воспользуйтесь другой картой
    public const SYSTEM_ERROR                    = 5096; // Ошибка банка-эквайера или сети - Повторите попытку позже
    public const UNABLE_TO_PROCESS               = 5204; // Операция не может быть обработана по прочим причинам - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const AUTHENTICATION_FAILED           = 5206; // 3-D Secure авторизация не пройдена - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const AUTHENTICATION_UNAVAILABLE      = 5207; // 3-D Secure авторизация недоступна - Свяжитесь с вашим банком или воспользуйтесь другой картой
    public const ANTI_FRAUD                      = 5300; // Лимиты эквайера на проведение операций - Воспользуйтесь другой картой

    public const ALL = [
        self::REFER_TO_CARD_ISSUER,
        self::INVALID_MERCHANT,
        self::PICK_UP_CARD,
        self::DO_NOT_HONOR,
        self::ERROR,
        self::PICK_UP_CARD_SPECIAL_CONDITIONS,
        self::INVALID_TRANSACTION,
        self::AMOUNT_ERROR,
        self::INVALID_CARD_NUMBER,
        self::NO_SUCH_ISSUER,
        self::TRANSACTION_ERROR,
        self::FORMAT_ERROR,
        self::BANK_NOT_SUPPORTED_BY_SWITCH,
        self::EXPIRED_CARD_PICKUP,
        self::SUSPECTED_FRAUD,
        self::RESTRICTED_CARD,
        self::LOST_CARD,
        self::STOLEN_CARD,
        self::INSUFFICIENT_FUNDS,
        self::EXPIRED_CARD,
        self::TRANSACTION_NOT_PERMITTED,
        self::RESTRICTED_CARD_2,
        self::SECURITY_VIOLATION,
        self::EXCEED_WITHDRAWAL_FREQUENCY,
        self::INCORRECT_CVV,
        self::TIMEOUT,
        self::CANNOT_REACH_NETWORK,
        self::SYSTEM_ERROR,
        self::UNABLE_TO_PROCESS,
        self::AUTHENTICATION_FAILED,
        self::AUTHENTICATION_UNAVAILABLE,
        self::ANTI_FRAUD,
    ];
}
