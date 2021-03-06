<?php
/**
 * @author Felipe Sayão Lobato Abreu <contato@felipeabreu.com.br>
 * @package CoiSA\ErrorHandler\Handler
 * @since 2017-07-24
 */

namespace CoiSA\ErrorHandler\Handler;

/**
 * Class DebugHandler
 * @package CoiSA\ErrorHandler\Handler
 */
abstract class DebugHandler implements HandlerInterface
{
    /**
     * @var bool Should add HTML <pre> TAG?
     */
    protected $pretty;

    /** @var  bool Send exit code? */
    protected $exit;

    /**
     * VarExportHandler constructor.
     *
     * @param bool $pretty
     */
    public function __construct(bool $pretty = true, $exit = false)
    {
        $this->pretty = $pretty;
        $this->exit = $exit;
    }
}