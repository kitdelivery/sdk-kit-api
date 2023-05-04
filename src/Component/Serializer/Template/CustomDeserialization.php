<?php

namespace service\KitAPI\Component\Serializer\Template;

class CustomDeserialization extends AbstractTemplate
{

    private const TMPL_CUSTOMER_INTERFACE = <<<'EOT'
{{initArgumentsCode}}

if (
    !empty({{arrayPath}}['type']) &&
    \service\KitAPI\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === {{arrayPath}}['type']
) {
    {{corporateCode}}
} else {
    {{customerCode}}
}

EOT;

    /**
     * @param string               $arrayPath
     * @param string               $modelPath
     * @param string               $className
     * @param array<string, mixed> $arguments
     * @param string               $customerCode
     * @param string               $corporateCode
     * @param string               $initArgumentsCode
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\SyntaxError
     */
    public function renderCustomerInterface(
        string $arrayPath,
        string $modelPath,
        string $className,
        array $arguments,
        string $customerCode,
        string $corporateCode,
        string $initArgumentsCode = ''
    ): string {
        return $this->render(self::TMPL_CUSTOMER_INTERFACE, [
            'arrayPath'         => $arrayPath,
            'modelPath'         => $modelPath,
            'className'         => $className,
            'arguments'         => $arguments,
            'customerCode'      => $customerCode,
            'corporateCode'     => $corporateCode,
            'initArgumentsCode' => $initArgumentsCode,
        ]);
    }
}