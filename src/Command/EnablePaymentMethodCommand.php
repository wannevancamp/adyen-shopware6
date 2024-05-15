<?php declare(strict_types=1);
/**
 *                       ######
 *                       ######
 * ############    ####( ######  #####. ######  ############   ############
 * #############  #####( ######  #####. ######  #############  #############
 *        ######  #####( ######  #####. ######  #####  ######  #####  ######
 * ###### ######  #####( ######  #####. ######  #####  #####   #####  ######
 * ###### ######  #####( ######  #####. ######  #####          #####  ######
 * #############  #############  #############  #############  #####  ######
 *  ############   ############  #############   ############  #####  ######
 *                                      ######
 *                               #############
 *                               ############
 *
 * Adyen Payment Module
 *
 * Copyright (c) 2022 Adyen N.V.
 * This file is open source and available under the MIT license.
 * See the LICENSE file for more info.
 *
 * Author: Adyen <shopware@adyen.com>
 */

namespace Adyen\Shopware\Command;

use Adyen\Shopware\Handlers\Command\PaymentMethodStatusHandler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'adyen:payment-method:enable', description: 'Enables Adyen payment methods')]
class EnablePaymentMethodCommand extends Command
{
    /**
     * @var PaymentMethodStatusHandler
     */
    protected PaymentMethodStatusHandler $handler;

    /**
     * @param PaymentMethodStatusHandler $handler
     */
    public function __construct(PaymentMethodStatusHandler $handler)
    {
        parent::__construct();
        $this->handler = $handler;
    }

    protected function configure(): void
    {
        $this->setDescription('Finds the payment method according to given PM handler and enables it');

        $this->addOption(
            'all',
            'A',
            InputOption::VALUE_NONE,
            'Enables all Adyen payment methods'
        );

        $this->addOption(
            'payment-method',
            'm',
            InputOption::VALUE_REQUIRED,
            'Enables given Adyen payment method'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $isAllSelected = $input->getOption('all');
            $paymentMethodHandlerIdentifier = $input->getOption('payment-method');

            if ($isAllSelected xor isset($paymentMethodHandlerIdentifier)) {
                $this->handler->run($isAllSelected, true, $paymentMethodHandlerIdentifier);
                $message = 'Payment method is enabled successfully.';
                $output->writeln($message);
            } else {
                throw new \Exception('Invalid parameter! For usage please check manual --help.');
            }
        } catch (\Exception $e) {
            $output->writeln($e->getMessage());
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
