## Structure Project - Slim 3 HMVC Skeleton

Now, Project structure project is follow structure below

```reStructuredText
.
├── CONTRIBUTING.md
├── README.md
├── cli.php
├── composer.json
├── composer.lock
├── docker-compose.yml
├── phpunit.xml
├── public
│   └── index.php
├── src
│   ├── App
│   │   └── AppController.php
│   ├── Commands
│   │   └── TestCommand.php
│   ├── Config
│   │   └── settings.php
│   ├── Helper
│   │   └── common.php
│   ├── Library
│   │   ├── BaseModel.php
│   │   ├── BaseModelInterface.php
│   │   ├── Config.php
│   │   └── Db.php
│   ├── Modules
│   │   └── Welcome
│   │       ├── Controller
│   │       │   └── WelcomeController.php
│   │       ├── Model
│   │       │   └── UserModel.php
│   │       └── Views
│   ├── bootstrap.php
│   ├── classmap.php
│   ├── constants.php
│   ├── dependencies.php
│   ├── middleware.php
│   └── routes.php
├── storage
│   ├── cache
│   │   └── README.md
│   ├── database
│   │   ├── README.md
│   │   └── slim_test.sql
│   └── logs
│       └── README.md
├── structure.md
├── templates
│   └── index.phtml
├── tests
│   └── Functional
│       ├── AppTest.php
│       ├── BaseTestCase.php
│       ├── HomepageTest.php
│       └── ModuleTest.php
└── vendor
    ├── autoload.php
    ├── bin
    │   └── phpunit -> ../phpunit/phpunit/phpunit
    ├── composer
    │   ├── ClassLoader.php
    │   ├── LICENSE
    │   ├── autoload_classmap.php
    │   ├── autoload_files.php
    │   ├── autoload_namespaces.php
    │   ├── autoload_psr4.php
    │   ├── autoload_real.php
    │   ├── autoload_static.php
    │   └── installed.json
    ├── container-interop
    │   └── container-interop
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       ├── docs
    │       │   ├── ContainerInterface-meta.md
    │       │   ├── ContainerInterface.md
    │       │   ├── Delegate-lookup-meta.md
    │       │   ├── Delegate-lookup.md
    │       │   └── images
    │       │       ├── interoperating_containers.png
    │       │       ├── priority.png
    │       │       └── side_by_side_containers.png
    │       └── src
    │           └── Interop
    │               └── Container
    │                   ├── ContainerInterface.php
    │                   └── Exception
    │                       ├── ContainerException.php
    │                       └── NotFoundException.php
    ├── doctrine
    │   └── instantiator
    │       ├── CONTRIBUTING.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           └── Doctrine
    │               └── Instantiator
    │                   ├── Exception
    │                   │   ├── ExceptionInterface.php
    │                   │   ├── InvalidArgumentException.php
    │                   │   └── UnexpectedValueException.php
    │                   ├── Instantiator.php
    │                   └── InstantiatorInterface.php
    ├── kint-php
    │   └── kint
    │       ├── LICENSE
    │       ├── README.md
    │       ├── build
    │       │   └── kint.phar
    │       ├── composer.json
    │       ├── init.php
    │       ├── init_helpers.php
    │       ├── resources
    │       │   └── compiled
    │       │       ├── aante-light.css
    │       │       ├── microtime.js
    │       │       ├── original.css
    │       │       ├── plain.css
    │       │       ├── plain.js
    │       │       ├── rich.js
    │       │       ├── shared.js
    │       │       ├── solarized-dark.css
    │       │       └── solarized.css
    │       └── src
    │           ├── CallFinder.php
    │           ├── Kint.php
    │           ├── Object
    │           │   ├── BasicObject.php
    │           │   ├── BlobObject.php
    │           │   ├── ClosureObject.php
    │           │   ├── DateTimeObject.php
    │           │   ├── InstanceObject.php
    │           │   ├── MethodObject.php
    │           │   ├── ParameterObject.php
    │           │   ├── Representation
    │           │   │   ├── ColorRepresentation.php
    │           │   │   ├── DocstringRepresentation.php
    │           │   │   ├── MicrotimeRepresentation.php
    │           │   │   ├── Representation.php
    │           │   │   ├── SourceRepresentation.php
    │           │   │   └── SplFileInfoRepresentation.php
    │           │   ├── ResourceObject.php
    │           │   ├── StreamObject.php
    │           │   ├── ThrowableObject.php
    │           │   ├── TraceFrameObject.php
    │           │   └── TraceObject.php
    │           ├── Parser
    │           │   ├── ArrayObjectPlugin.php
    │           │   ├── Base64Plugin.php
    │           │   ├── BinaryPlugin.php
    │           │   ├── BlacklistPlugin.php
    │           │   ├── ClassMethodsPlugin.php
    │           │   ├── ClassStaticsPlugin.php
    │           │   ├── ClosurePlugin.php
    │           │   ├── ColorPlugin.php
    │           │   ├── DOMDocumentPlugin.php
    │           │   ├── DateTimePlugin.php
    │           │   ├── FsPathPlugin.php
    │           │   ├── IteratorPlugin.php
    │           │   ├── JsonPlugin.php
    │           │   ├── MicrotimePlugin.php
    │           │   ├── Parser.php
    │           │   ├── Plugin.php
    │           │   ├── ProxyPlugin.php
    │           │   ├── SerializePlugin.php
    │           │   ├── SimpleXMLElementPlugin.php
    │           │   ├── SplFileInfoPlugin.php
    │           │   ├── SplObjectStoragePlugin.php
    │           │   ├── StreamPlugin.php
    │           │   ├── TablePlugin.php
    │           │   ├── ThrowablePlugin.php
    │           │   ├── TimestampPlugin.php
    │           │   ├── ToStringPlugin.php
    │           │   ├── TracePlugin.php
    │           │   └── XmlPlugin.php
    │           ├── Renderer
    │           │   ├── CliRenderer.php
    │           │   ├── PlainRenderer.php
    │           │   ├── Renderer.php
    │           │   ├── Rich
    │           │   │   ├── BinaryPlugin.php
    │           │   │   ├── BlacklistPlugin.php
    │           │   │   ├── CallablePlugin.php
    │           │   │   ├── ClosurePlugin.php
    │           │   │   ├── ColorPlugin.php
    │           │   │   ├── DepthLimitPlugin.php
    │           │   │   ├── DocstringPlugin.php
    │           │   │   ├── MicrotimePlugin.php
    │           │   │   ├── ObjectPluginInterface.php
    │           │   │   ├── Plugin.php
    │           │   │   ├── PluginInterface.php
    │           │   │   ├── RecursionPlugin.php
    │           │   │   ├── SimpleXMLElementPlugin.php
    │           │   │   ├── SourcePlugin.php
    │           │   │   ├── TabPluginInterface.php
    │           │   │   ├── TablePlugin.php
    │           │   │   ├── TimestampPlugin.php
    │           │   │   └── TraceFramePlugin.php
    │           │   ├── RichRenderer.php
    │           │   ├── Text
    │           │   │   ├── BlacklistPlugin.php
    │           │   │   ├── DepthLimitPlugin.php
    │           │   │   ├── MicrotimePlugin.php
    │           │   │   ├── Plugin.php
    │           │   │   ├── RecursionPlugin.php
    │           │   │   └── TracePlugin.php
    │           │   └── TextRenderer.php
    │           └── Utils.php
    ├── monolog
    │   └── monolog
    │       ├── CHANGELOG.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       ├── doc
    │       │   ├── 01-usage.md
    │       │   ├── 02-handlers-formatters-processors.md
    │       │   ├── 03-utilities.md
    │       │   ├── 04-extending.md
    │       │   └── sockets.md
    │       ├── phpunit.xml.dist
    │       ├── src
    │       │   └── Monolog
    │       │       ├── ErrorHandler.php
    │       │       ├── Formatter
    │       │       │   ├── ChromePHPFormatter.php
    │       │       │   ├── ElasticaFormatter.php
    │       │       │   ├── FlowdockFormatter.php
    │       │       │   ├── FluentdFormatter.php
    │       │       │   ├── FormatterInterface.php
    │       │       │   ├── GelfMessageFormatter.php
    │       │       │   ├── HtmlFormatter.php
    │       │       │   ├── JsonFormatter.php
    │       │       │   ├── LineFormatter.php
    │       │       │   ├── LogglyFormatter.php
    │       │       │   ├── LogstashFormatter.php
    │       │       │   ├── MongoDBFormatter.php
    │       │       │   ├── NormalizerFormatter.php
    │       │       │   ├── ScalarFormatter.php
    │       │       │   └── WildfireFormatter.php
    │       │       ├── Handler
    │       │       │   ├── AbstractHandler.php
    │       │       │   ├── AbstractProcessingHandler.php
    │       │       │   ├── AbstractSyslogHandler.php
    │       │       │   ├── AmqpHandler.php
    │       │       │   ├── BrowserConsoleHandler.php
    │       │       │   ├── BufferHandler.php
    │       │       │   ├── ChromePHPHandler.php
    │       │       │   ├── CouchDBHandler.php
    │       │       │   ├── CubeHandler.php
    │       │       │   ├── Curl
    │       │       │   │   └── Util.php
    │       │       │   ├── DeduplicationHandler.php
    │       │       │   ├── DoctrineCouchDBHandler.php
    │       │       │   ├── DynamoDbHandler.php
    │       │       │   ├── ElasticSearchHandler.php
    │       │       │   ├── ErrorLogHandler.php
    │       │       │   ├── FilterHandler.php
    │       │       │   ├── FingersCrossed
    │       │       │   │   ├── ActivationStrategyInterface.php
    │       │       │   │   ├── ChannelLevelActivationStrategy.php
    │       │       │   │   └── ErrorLevelActivationStrategy.php
    │       │       │   ├── FingersCrossedHandler.php
    │       │       │   ├── FirePHPHandler.php
    │       │       │   ├── FleepHookHandler.php
    │       │       │   ├── FlowdockHandler.php
    │       │       │   ├── GelfHandler.php
    │       │       │   ├── GroupHandler.php
    │       │       │   ├── HandlerInterface.php
    │       │       │   ├── HandlerWrapper.php
    │       │       │   ├── HipChatHandler.php
    │       │       │   ├── IFTTTHandler.php
    │       │       │   ├── LogEntriesHandler.php
    │       │       │   ├── LogglyHandler.php
    │       │       │   ├── MailHandler.php
    │       │       │   ├── MandrillHandler.php
    │       │       │   ├── MissingExtensionException.php
    │       │       │   ├── MongoDBHandler.php
    │       │       │   ├── NativeMailerHandler.php
    │       │       │   ├── NewRelicHandler.php
    │       │       │   ├── NullHandler.php
    │       │       │   ├── PHPConsoleHandler.php
    │       │       │   ├── PsrHandler.php
    │       │       │   ├── PushoverHandler.php
    │       │       │   ├── RavenHandler.php
    │       │       │   ├── RedisHandler.php
    │       │       │   ├── RollbarHandler.php
    │       │       │   ├── RotatingFileHandler.php
    │       │       │   ├── SamplingHandler.php
    │       │       │   ├── Slack
    │       │       │   │   └── SlackRecord.php
    │       │       │   ├── SlackHandler.php
    │       │       │   ├── SlackWebhookHandler.php
    │       │       │   ├── SlackbotHandler.php
    │       │       │   ├── SocketHandler.php
    │       │       │   ├── StreamHandler.php
    │       │       │   ├── SwiftMailerHandler.php
    │       │       │   ├── SyslogHandler.php
    │       │       │   ├── SyslogUdp
    │       │       │   │   └── UdpSocket.php
    │       │       │   ├── SyslogUdpHandler.php
    │       │       │   ├── TestHandler.php
    │       │       │   ├── WhatFailureGroupHandler.php
    │       │       │   └── ZendMonitorHandler.php
    │       │       ├── Logger.php
    │       │       ├── Processor
    │       │       │   ├── GitProcessor.php
    │       │       │   ├── IntrospectionProcessor.php
    │       │       │   ├── MemoryPeakUsageProcessor.php
    │       │       │   ├── MemoryProcessor.php
    │       │       │   ├── MemoryUsageProcessor.php
    │       │       │   ├── MercurialProcessor.php
    │       │       │   ├── ProcessIdProcessor.php
    │       │       │   ├── PsrLogMessageProcessor.php
    │       │       │   ├── TagProcessor.php
    │       │       │   ├── UidProcessor.php
    │       │       │   └── WebProcessor.php
    │       │       └── Registry.php
    │       └── tests
    │           └── Monolog
    │               ├── ErrorHandlerTest.php
    │               ├── Formatter
    │               │   ├── ChromePHPFormatterTest.php
    │               │   ├── ElasticaFormatterTest.php
    │               │   ├── FlowdockFormatterTest.php
    │               │   ├── FluentdFormatterTest.php
    │               │   ├── GelfMessageFormatterTest.php
    │               │   ├── JsonFormatterTest.php
    │               │   ├── LineFormatterTest.php
    │               │   ├── LogglyFormatterTest.php
    │               │   ├── LogstashFormatterTest.php
    │               │   ├── MongoDBFormatterTest.php
    │               │   ├── NormalizerFormatterTest.php
    │               │   ├── ScalarFormatterTest.php
    │               │   └── WildfireFormatterTest.php
    │               ├── Handler
    │               │   ├── AbstractHandlerTest.php
    │               │   ├── AbstractProcessingHandlerTest.php
    │               │   ├── AmqpHandlerTest.php
    │               │   ├── BrowserConsoleHandlerTest.php
    │               │   ├── BufferHandlerTest.php
    │               │   ├── ChromePHPHandlerTest.php
    │               │   ├── CouchDBHandlerTest.php
    │               │   ├── DeduplicationHandlerTest.php
    │               │   ├── DoctrineCouchDBHandlerTest.php
    │               │   ├── DynamoDbHandlerTest.php
    │               │   ├── ElasticSearchHandlerTest.php
    │               │   ├── ErrorLogHandlerTest.php
    │               │   ├── FilterHandlerTest.php
    │               │   ├── FingersCrossedHandlerTest.php
    │               │   ├── FirePHPHandlerTest.php
    │               │   ├── Fixtures
    │               │   ├── FleepHookHandlerTest.php
    │               │   ├── FlowdockHandlerTest.php
    │               │   ├── GelfHandlerLegacyTest.php
    │               │   ├── GelfHandlerTest.php
    │               │   ├── GelfMockMessagePublisher.php
    │               │   ├── GroupHandlerTest.php
    │               │   ├── HandlerWrapperTest.php
    │               │   ├── HipChatHandlerTest.php
    │               │   ├── LogEntriesHandlerTest.php
    │               │   ├── MailHandlerTest.php
    │               │   ├── MockRavenClient.php
    │               │   ├── MongoDBHandlerTest.php
    │               │   ├── NativeMailerHandlerTest.php
    │               │   ├── NewRelicHandlerTest.php
    │               │   ├── NullHandlerTest.php
    │               │   ├── PHPConsoleHandlerTest.php
    │               │   ├── PsrHandlerTest.php
    │               │   ├── PushoverHandlerTest.php
    │               │   ├── RavenHandlerTest.php
    │               │   ├── RedisHandlerTest.php
    │               │   ├── RollbarHandlerTest.php
    │               │   ├── RotatingFileHandlerTest.php
    │               │   ├── SamplingHandlerTest.php
    │               │   ├── Slack
    │               │   │   └── SlackRecordTest.php
    │               │   ├── SlackHandlerTest.php
    │               │   ├── SlackWebhookHandlerTest.php
    │               │   ├── SlackbotHandlerTest.php
    │               │   ├── SocketHandlerTest.php
    │               │   ├── StreamHandlerTest.php
    │               │   ├── SwiftMailerHandlerTest.php
    │               │   ├── SyslogHandlerTest.php
    │               │   ├── SyslogUdpHandlerTest.php
    │               │   ├── TestHandlerTest.php
    │               │   ├── UdpSocketTest.php
    │               │   ├── WhatFailureGroupHandlerTest.php
    │               │   └── ZendMonitorHandlerTest.php
    │               ├── LoggerTest.php
    │               ├── Processor
    │               │   ├── GitProcessorTest.php
    │               │   ├── IntrospectionProcessorTest.php
    │               │   ├── MemoryPeakUsageProcessorTest.php
    │               │   ├── MemoryUsageProcessorTest.php
    │               │   ├── MercurialProcessorTest.php
    │               │   ├── ProcessIdProcessorTest.php
    │               │   ├── PsrLogMessageProcessorTest.php
    │               │   ├── TagProcessorTest.php
    │               │   ├── UidProcessorTest.php
    │               │   └── WebProcessorTest.php
    │               ├── PsrLogCompatTest.php
    │               ├── RegistryTest.php
    │               └── TestCase.php
    ├── myclabs
    │   └── deep-copy
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       ├── doc
    │       │   ├── clone.png
    │       │   ├── deep-clone.png
    │       │   ├── deep-copy.png
    │       │   └── graph.png
    │       ├── fixtures
    │       │   ├── f001
    │       │   │   ├── A.php
    │       │   │   └── B.php
    │       │   ├── f002
    │       │   │   └── A.php
    │       │   ├── f003
    │       │   │   └── Foo.php
    │       │   ├── f004
    │       │   │   └── UnclonableItem.php
    │       │   ├── f005
    │       │   │   └── Foo.php
    │       │   ├── f006
    │       │   │   ├── A.php
    │       │   │   └── B.php
    │       │   ├── f007
    │       │   │   ├── FooDateInterval.php
    │       │   │   └── FooDateTimeZone.php
    │       │   └── f008
    │       │       ├── A.php
    │       │       └── B.php
    │       └── src
    │           └── DeepCopy
    │               ├── DeepCopy.php
    │               ├── Exception
    │               │   ├── CloneException.php
    │               │   └── PropertyException.php
    │               ├── Filter
    │               │   ├── Doctrine
    │               │   │   ├── DoctrineCollectionFilter.php
    │               │   │   ├── DoctrineEmptyCollectionFilter.php
    │               │   │   └── DoctrineProxyFilter.php
    │               │   ├── Filter.php
    │               │   ├── KeepFilter.php
    │               │   ├── ReplaceFilter.php
    │               │   └── SetNullFilter.php
    │               ├── Matcher
    │               │   ├── Doctrine
    │               │   │   └── DoctrineProxyMatcher.php
    │               │   ├── Matcher.php
    │               │   ├── PropertyMatcher.php
    │               │   ├── PropertyNameMatcher.php
    │               │   └── PropertyTypeMatcher.php
    │               ├── Reflection
    │               │   └── ReflectionHelper.php
    │               ├── TypeFilter
    │               │   ├── Date
    │               │   │   └── DateIntervalFilter.php
    │               │   ├── ReplaceFilter.php
    │               │   ├── ShallowCopyFilter.php
    │               │   ├── Spl
    │               │   │   ├── SplDoublyLinkedList.php
    │               │   │   └── SplDoublyLinkedListFilter.php
    │               │   └── TypeFilter.php
    │               ├── TypeMatcher
    │               │   └── TypeMatcher.php
    │               └── deep_copy.php
    ├── nikic
    │   └── fast-route
    │       ├── FastRoute.hhi
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       ├── phpunit.xml
    │       ├── psalm.xml
    │       ├── src
    │       │   ├── BadRouteException.php
    │       │   ├── DataGenerator
    │       │   │   ├── CharCountBased.php
    │       │   │   ├── GroupCountBased.php
    │       │   │   ├── GroupPosBased.php
    │       │   │   ├── MarkBased.php
    │       │   │   └── RegexBasedAbstract.php
    │       │   ├── DataGenerator.php
    │       │   ├── Dispatcher
    │       │   │   ├── CharCountBased.php
    │       │   │   ├── GroupCountBased.php
    │       │   │   ├── GroupPosBased.php
    │       │   │   ├── MarkBased.php
    │       │   │   └── RegexBasedAbstract.php
    │       │   ├── Dispatcher.php
    │       │   ├── Route.php
    │       │   ├── RouteCollector.php
    │       │   ├── RouteParser
    │       │   │   └── Std.php
    │       │   ├── RouteParser.php
    │       │   ├── bootstrap.php
    │       │   └── functions.php
    │       └── test
    │           ├── Dispatcher
    │           │   ├── CharCountBasedTest.php
    │           │   ├── DispatcherTest.php
    │           │   ├── GroupCountBasedTest.php
    │           │   ├── GroupPosBasedTest.php
    │           │   └── MarkBasedTest.php
    │           ├── HackTypechecker
    │           │   ├── HackTypecheckerTest.php
    │           │   └── fixtures
    │           │       ├── all_options.php
    │           │       ├── empty_options.php
    │           │       └── no_options.php
    │           ├── RouteCollectorTest.php
    │           ├── RouteParser
    │           │   └── StdTest.php
    │           └── bootstrap.php
    ├── paragonie
    │   └── random_compat
    │       ├── LICENSE
    │       ├── build-phar.sh
    │       ├── composer.json
    │       ├── dist
    │       │   ├── random_compat.phar.pubkey
    │       │   └── random_compat.phar.pubkey.asc
    │       ├── lib
    │       │   └── random.php
    │       ├── other
    │       │   └── build_phar.php
    │       ├── psalm-autoload.php
    │       └── psalm.xml
    ├── phpdocumentor
    │   ├── reflection-common
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Element.php
    │   │       ├── File.php
    │   │       ├── Fqsen.php
    │   │       ├── Location.php
    │   │       ├── Project.php
    │   │       └── ProjectFactory.php
    │   ├── reflection-docblock
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   ├── easy-coding-standard.neon
    │   │   └── src
    │   │       ├── DocBlock
    │   │       │   ├── Description.php
    │   │       │   ├── DescriptionFactory.php
    │   │       │   ├── ExampleFinder.php
    │   │       │   ├── Serializer.php
    │   │       │   ├── StandardTagFactory.php
    │   │       │   ├── Tag.php
    │   │       │   ├── TagFactory.php
    │   │       │   └── Tags
    │   │       │       ├── Author.php
    │   │       │       ├── BaseTag.php
    │   │       │       ├── Covers.php
    │   │       │       ├── Deprecated.php
    │   │       │       ├── Example.php
    │   │       │       ├── Factory
    │   │       │       │   ├── StaticMethod.php
    │   │       │       │   └── Strategy.php
    │   │       │       ├── Formatter
    │   │       │       │   ├── AlignFormatter.php
    │   │       │       │   └── PassthroughFormatter.php
    │   │       │       ├── Formatter.php
    │   │       │       ├── Generic.php
    │   │       │       ├── Link.php
    │   │       │       ├── Method.php
    │   │       │       ├── Param.php
    │   │       │       ├── Property.php
    │   │       │       ├── PropertyRead.php
    │   │       │       ├── PropertyWrite.php
    │   │       │       ├── Reference
    │   │       │       │   ├── Fqsen.php
    │   │       │       │   ├── Reference.php
    │   │       │       │   └── Url.php
    │   │       │       ├── Return_.php
    │   │       │       ├── See.php
    │   │       │       ├── Since.php
    │   │       │       ├── Source.php
    │   │       │       ├── Throws.php
    │   │       │       ├── Uses.php
    │   │       │       ├── Var_.php
    │   │       │       └── Version.php
    │   │       ├── DocBlock.php
    │   │       ├── DocBlockFactory.php
    │   │       └── DocBlockFactoryInterface.php
    │   └── type-resolver
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           ├── FqsenResolver.php
    │           ├── Type.php
    │           ├── TypeResolver.php
    │           └── Types
    │               ├── Array_.php
    │               ├── Boolean.php
    │               ├── Callable_.php
    │               ├── Compound.php
    │               ├── Context.php
    │               ├── ContextFactory.php
    │               ├── Float_.php
    │               ├── Integer.php
    │               ├── Iterable_.php
    │               ├── Mixed_.php
    │               ├── Null_.php
    │               ├── Nullable.php
    │               ├── Object_.php
    │               ├── Parent_.php
    │               ├── Resource_.php
    │               ├── Scalar.php
    │               ├── Self_.php
    │               ├── Static_.php
    │               ├── String_.php
    │               ├── This.php
    │               └── Void_.php
    ├── phpspec
    │   └── prophecy
    │       ├── CHANGES.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           └── Prophecy
    │               ├── Argument
    │               │   ├── ArgumentsWildcard.php
    │               │   └── Token
    │               │       ├── AnyValueToken.php
    │               │       ├── AnyValuesToken.php
    │               │       ├── ApproximateValueToken.php
    │               │       ├── ArrayCountToken.php
    │               │       ├── ArrayEntryToken.php
    │               │       ├── ArrayEveryEntryToken.php
    │               │       ├── CallbackToken.php
    │               │       ├── ExactValueToken.php
    │               │       ├── IdenticalValueToken.php
    │               │       ├── LogicalAndToken.php
    │               │       ├── LogicalNotToken.php
    │               │       ├── ObjectStateToken.php
    │               │       ├── StringContainsToken.php
    │               │       ├── TokenInterface.php
    │               │       └── TypeToken.php
    │               ├── Argument.php
    │               ├── Call
    │               │   ├── Call.php
    │               │   └── CallCenter.php
    │               ├── Comparator
    │               │   ├── ClosureComparator.php
    │               │   ├── Factory.php
    │               │   └── ProphecyComparator.php
    │               ├── Doubler
    │               │   ├── CachedDoubler.php
    │               │   ├── ClassPatch
    │               │   │   ├── ClassPatchInterface.php
    │               │   │   ├── DisableConstructorPatch.php
    │               │   │   ├── HhvmExceptionPatch.php
    │               │   │   ├── KeywordPatch.php
    │               │   │   ├── MagicCallPatch.php
    │               │   │   ├── ProphecySubjectPatch.php
    │               │   │   ├── ReflectionClassNewInstancePatch.php
    │               │   │   ├── SplFileInfoPatch.php
    │               │   │   ├── ThrowablePatch.php
    │               │   │   └── TraversablePatch.php
    │               │   ├── DoubleInterface.php
    │               │   ├── Doubler.php
    │               │   ├── Generator
    │               │   │   ├── ClassCodeGenerator.php
    │               │   │   ├── ClassCreator.php
    │               │   │   ├── ClassMirror.php
    │               │   │   ├── Node
    │               │   │   │   ├── ArgumentNode.php
    │               │   │   │   ├── ClassNode.php
    │               │   │   │   └── MethodNode.php
    │               │   │   ├── ReflectionInterface.php
    │               │   │   └── TypeHintReference.php
    │               │   ├── LazyDouble.php
    │               │   └── NameGenerator.php
    │               ├── Exception
    │               │   ├── Call
    │               │   │   └── UnexpectedCallException.php
    │               │   ├── Doubler
    │               │   │   ├── ClassCreatorException.php
    │               │   │   ├── ClassMirrorException.php
    │               │   │   ├── ClassNotFoundException.php
    │               │   │   ├── DoubleException.php
    │               │   │   ├── DoublerException.php
    │               │   │   ├── InterfaceNotFoundException.php
    │               │   │   ├── MethodNotExtendableException.php
    │               │   │   ├── MethodNotFoundException.php
    │               │   │   └── ReturnByReferenceException.php
    │               │   ├── Exception.php
    │               │   ├── InvalidArgumentException.php
    │               │   ├── Prediction
    │               │   │   ├── AggregateException.php
    │               │   │   ├── FailedPredictionException.php
    │               │   │   ├── NoCallsException.php
    │               │   │   ├── PredictionException.php
    │               │   │   ├── UnexpectedCallsCountException.php
    │               │   │   └── UnexpectedCallsException.php
    │               │   └── Prophecy
    │               │       ├── MethodProphecyException.php
    │               │       ├── ObjectProphecyException.php
    │               │       └── ProphecyException.php
    │               ├── PhpDocumentor
    │               │   ├── ClassAndInterfaceTagRetriever.php
    │               │   ├── ClassTagRetriever.php
    │               │   ├── LegacyClassTagRetriever.php
    │               │   └── MethodTagRetrieverInterface.php
    │               ├── Prediction
    │               │   ├── CallPrediction.php
    │               │   ├── CallTimesPrediction.php
    │               │   ├── CallbackPrediction.php
    │               │   ├── NoCallsPrediction.php
    │               │   └── PredictionInterface.php
    │               ├── Promise
    │               │   ├── CallbackPromise.php
    │               │   ├── PromiseInterface.php
    │               │   ├── ReturnArgumentPromise.php
    │               │   ├── ReturnPromise.php
    │               │   └── ThrowPromise.php
    │               ├── Prophecy
    │               │   ├── MethodProphecy.php
    │               │   ├── ObjectProphecy.php
    │               │   ├── ProphecyInterface.php
    │               │   ├── ProphecySubjectInterface.php
    │               │   ├── Revealer.php
    │               │   └── RevealerInterface.php
    │               ├── Prophet.php
    │               └── Util
    │                   ├── ExportUtil.php
    │                   └── StringUtil.php
    ├── phpunit
    │   ├── php-code-coverage
    │   │   ├── ChangeLog-2.2.md
    │   │   ├── ChangeLog-3.0.md
    │   │   ├── ChangeLog-3.1.md
    │   │   ├── ChangeLog-3.2.md
    │   │   ├── ChangeLog-3.3.md
    │   │   ├── ChangeLog-4.0.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── CodeCoverage.php
    │   │   │   ├── Driver
    │   │   │   │   ├── Driver.php
    │   │   │   │   ├── HHVM.php
    │   │   │   │   ├── PHPDBG.php
    │   │   │   │   └── Xdebug.php
    │   │   │   ├── Exception
    │   │   │   │   ├── CoveredCodeNotExecutedException.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── InvalidArgumentException.php
    │   │   │   │   ├── MissingCoversAnnotationException.php
    │   │   │   │   ├── RuntimeException.php
    │   │   │   │   └── UnintentionallyCoveredCodeException.php
    │   │   │   ├── Filter.php
    │   │   │   ├── Node
    │   │   │   │   ├── AbstractNode.php
    │   │   │   │   ├── Builder.php
    │   │   │   │   ├── Directory.php
    │   │   │   │   ├── File.php
    │   │   │   │   └── Iterator.php
    │   │   │   ├── Report
    │   │   │   │   ├── Clover.php
    │   │   │   │   ├── Crap4j.php
    │   │   │   │   ├── Html
    │   │   │   │   │   ├── Facade.php
    │   │   │   │   │   ├── Renderer
    │   │   │   │   │   │   ├── Dashboard.php
    │   │   │   │   │   │   ├── Directory.php
    │   │   │   │   │   │   ├── File.php
    │   │   │   │   │   │   └── Template
    │   │   │   │   │   │       ├── coverage_bar.html.dist
    │   │   │   │   │   │       ├── css
    │   │   │   │   │   │       │   ├── bootstrap.min.css
    │   │   │   │   │   │       │   ├── nv.d3.min.css
    │   │   │   │   │   │       │   └── style.css
    │   │   │   │   │   │       ├── dashboard.html.dist
    │   │   │   │   │   │       ├── directory.html.dist
    │   │   │   │   │   │       ├── directory_item.html.dist
    │   │   │   │   │   │       ├── file.html.dist
    │   │   │   │   │   │       ├── file_item.html.dist
    │   │   │   │   │   │       ├── fonts
    │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.eot
    │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.svg
    │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.ttf
    │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.woff
    │   │   │   │   │   │       │   └── glyphicons-halflings-regular.woff2
    │   │   │   │   │   │       ├── js
    │   │   │   │   │   │       │   ├── bootstrap.min.js
    │   │   │   │   │   │       │   ├── d3.min.js
    │   │   │   │   │   │       │   ├── holder.min.js
    │   │   │   │   │   │       │   ├── html5shiv.min.js
    │   │   │   │   │   │       │   ├── jquery.min.js
    │   │   │   │   │   │       │   ├── nv.d3.min.js
    │   │   │   │   │   │       │   └── respond.min.js
    │   │   │   │   │   │       └── method_item.html.dist
    │   │   │   │   │   └── Renderer.php
    │   │   │   │   ├── PHP.php
    │   │   │   │   ├── Text.php
    │   │   │   │   └── Xml
    │   │   │   │       ├── Coverage.php
    │   │   │   │       ├── Directory.php
    │   │   │   │       ├── Facade.php
    │   │   │   │       ├── File.php
    │   │   │   │       ├── Method.php
    │   │   │   │       ├── Node.php
    │   │   │   │       ├── Project.php
    │   │   │   │       ├── Report.php
    │   │   │   │       ├── Tests.php
    │   │   │   │       ├── Totals.php
    │   │   │   │       └── Unit.php
    │   │   │   └── Util.php
    │   │   └── tests
    │   │       ├── TestCase.php
    │   │       ├── _files
    │   │       │   ├── BankAccount-clover.xml
    │   │       │   ├── BankAccount-crap4j.xml
    │   │       │   ├── BankAccount-text.txt
    │   │       │   ├── BankAccount.php
    │   │       │   ├── BankAccountTest.php
    │   │       │   ├── CoverageClassExtendedTest.php
    │   │       │   ├── CoverageClassTest.php
    │   │       │   ├── CoverageFunctionParenthesesTest.php
    │   │       │   ├── CoverageFunctionParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageFunctionTest.php
    │   │       │   ├── CoverageMethodOneLineAnnotationTest.php
    │   │       │   ├── CoverageMethodParenthesesTest.php
    │   │       │   ├── CoverageMethodParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageMethodTest.php
    │   │       │   ├── CoverageNoneTest.php
    │   │       │   ├── CoverageNotPrivateTest.php
    │   │       │   ├── CoverageNotProtectedTest.php
    │   │       │   ├── CoverageNotPublicTest.php
    │   │       │   ├── CoverageNothingTest.php
    │   │       │   ├── CoveragePrivateTest.php
    │   │       │   ├── CoverageProtectedTest.php
    │   │       │   ├── CoveragePublicTest.php
    │   │       │   ├── CoverageTwoDefaultClassAnnotations.php
    │   │       │   ├── CoveredClass.php
    │   │       │   ├── CoveredFunction.php
    │   │       │   ├── NamespaceCoverageClassExtendedTest.php
    │   │       │   ├── NamespaceCoverageClassTest.php
    │   │       │   ├── NamespaceCoverageCoversClassPublicTest.php
    │   │       │   ├── NamespaceCoverageCoversClassTest.php
    │   │       │   ├── NamespaceCoverageMethodTest.php
    │   │       │   ├── NamespaceCoverageNotPrivateTest.php
    │   │       │   ├── NamespaceCoverageNotProtectedTest.php
    │   │       │   ├── NamespaceCoverageNotPublicTest.php
    │   │       │   ├── NamespaceCoveragePrivateTest.php
    │   │       │   ├── NamespaceCoverageProtectedTest.php
    │   │       │   ├── NamespaceCoveragePublicTest.php
    │   │       │   ├── NamespaceCoveredClass.php
    │   │       │   ├── NotExistingCoveredElementTest.php
    │   │       │   ├── Report
    │   │       │   │   ├── HTML
    │   │       │   │   │   ├── CoverageForBankAccount
    │   │       │   │   │   │   ├── BankAccount.php.html
    │   │       │   │   │   │   ├── dashboard.html
    │   │       │   │   │   │   └── index.html
    │   │       │   │   │   ├── CoverageForClassWithAnonymousFunction
    │   │       │   │   │   │   ├── dashboard.html
    │   │       │   │   │   │   ├── index.html
    │   │       │   │   │   │   └── source_with_class_and_anonymous_function.php.html
    │   │       │   │   │   └── CoverageForFileWithIgnoredLines
    │   │       │   │   │       ├── dashboard.html
    │   │       │   │   │       ├── index.html
    │   │       │   │   │       └── source_with_ignore.php.html
    │   │       │   │   └── XML
    │   │       │   │       ├── CoverageForBankAccount
    │   │       │   │       │   ├── BankAccount.php.xml
    │   │       │   │       │   └── index.xml
    │   │       │   │       ├── CoverageForClassWithAnonymousFunction
    │   │       │   │       │   ├── index.xml
    │   │       │   │       │   └── source_with_class_and_anonymous_function.php.xml
    │   │       │   │       └── CoverageForFileWithIgnoredLines
    │   │       │   │           ├── index.xml
    │   │       │   │           └── source_with_ignore.php.xml
    │   │       │   ├── class-with-anonymous-function-clover.xml
    │   │       │   ├── class-with-anonymous-function-crap4j.xml
    │   │       │   ├── class-with-anonymous-function-text.txt
    │   │       │   ├── ignored-lines-clover.xml
    │   │       │   ├── ignored-lines-crap4j.xml
    │   │       │   ├── ignored-lines-text.txt
    │   │       │   ├── source_with_class_and_anonymous_function.php
    │   │       │   ├── source_with_ignore.php
    │   │       │   ├── source_with_namespace.php
    │   │       │   ├── source_with_oneline_annotations.php
    │   │       │   ├── source_without_ignore.php
    │   │       │   └── source_without_namespace.php
    │   │       ├── bootstrap.php
    │   │       └── tests
    │   │           ├── BuilderTest.php
    │   │           ├── CloverTest.php
    │   │           ├── CodeCoverageTest.php
    │   │           ├── Crap4jTest.php
    │   │           ├── FilterTest.php
    │   │           ├── HTMLTest.php
    │   │           ├── TextTest.php
    │   │           ├── UtilTest.php
    │   │           └── XMLTest.php
    │   ├── php-file-iterator
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Facade.php
    │   │       ├── Factory.php
    │   │       └── Iterator.php
    │   ├── php-text-template
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── Template.php
    │   ├── php-timer
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   └── Timer.php
    │   │   └── tests
    │   │       └── TimerTest.php
    │   ├── php-token-stream
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Token
    │   │   │   │   ├── Stream
    │   │   │   │   │   └── CachingFactory.php
    │   │   │   │   └── Stream.php
    │   │   │   └── Token.php
    │   │   └── tests
    │   │       ├── Token
    │   │       │   ├── ClassTest.php
    │   │       │   ├── ClosureTest.php
    │   │       │   ├── FunctionTest.php
    │   │       │   ├── IncludeTest.php
    │   │       │   ├── InterfaceTest.php
    │   │       │   └── NamespaceTest.php
    │   │       ├── TokenTest.php
    │   │       ├── _fixture
    │   │       │   ├── classExtendsNamespacedClass.php
    │   │       │   ├── classInNamespace.php
    │   │       │   ├── classInScopedNamespace.php
    │   │       │   ├── classUsesNamespacedFunction.php
    │   │       │   ├── class_with_method_named_empty.php
    │   │       │   ├── class_with_method_that_declares_anonymous_class.php
    │   │       │   ├── class_with_method_that_declares_anonymous_class2.php
    │   │       │   ├── class_with_multiple_anonymous_classes_and_functions.php
    │   │       │   ├── closure.php
    │   │       │   ├── issue19.php
    │   │       │   ├── issue30.php
    │   │       │   ├── multipleNamespacesWithOneClassUsingBraces.php
    │   │       │   ├── multipleNamespacesWithOneClassUsingNonBraceSyntax.php
    │   │       │   ├── php-code-coverage-issue-424.php
    │   │       │   ├── source.php
    │   │       │   ├── source2.php
    │   │       │   ├── source3.php
    │   │       │   ├── source4.php
    │   │       │   └── source5.php
    │   │       └── bootstrap.php
    │   ├── phpunit
    │   │   ├── ChangeLog-5.7.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit
    │   │   ├── phpunit.xml
    │   │   ├── phpunit.xsd
    │   │   ├── src
    │   │   │   ├── Exception.php
    │   │   │   ├── Extensions
    │   │   │   │   ├── GroupTestSuite.php
    │   │   │   │   ├── PhptTestCase.php
    │   │   │   │   ├── PhptTestSuite.php
    │   │   │   │   ├── RepeatedTest.php
    │   │   │   │   ├── TestDecorator.php
    │   │   │   │   └── TicketListener.php
    │   │   │   ├── ForwardCompatibility
    │   │   │   │   ├── Assert.php
    │   │   │   │   ├── AssertionFailedError.php
    │   │   │   │   ├── BaseTestListener.php
    │   │   │   │   ├── Test.php
    │   │   │   │   ├── TestCase.php
    │   │   │   │   ├── TestListener.php
    │   │   │   │   └── TestSuite.php
    │   │   │   ├── Framework
    │   │   │   │   ├── Assert
    │   │   │   │   │   └── Functions.php
    │   │   │   │   ├── Assert.php
    │   │   │   │   ├── AssertionFailedError.php
    │   │   │   │   ├── BaseTestListener.php
    │   │   │   │   ├── CodeCoverageException.php
    │   │   │   │   ├── Constraint
    │   │   │   │   │   ├── And.php
    │   │   │   │   │   ├── ArrayHasKey.php
    │   │   │   │   │   ├── ArraySubset.php
    │   │   │   │   │   ├── Attribute.php
    │   │   │   │   │   ├── Callback.php
    │   │   │   │   │   ├── ClassHasAttribute.php
    │   │   │   │   │   ├── ClassHasStaticAttribute.php
    │   │   │   │   │   ├── Composite.php
    │   │   │   │   │   ├── Count.php
    │   │   │   │   │   ├── DirectoryExists.php
    │   │   │   │   │   ├── Exception.php
    │   │   │   │   │   ├── ExceptionCode.php
    │   │   │   │   │   ├── ExceptionMessage.php
    │   │   │   │   │   ├── ExceptionMessageRegExp.php
    │   │   │   │   │   ├── FileExists.php
    │   │   │   │   │   ├── GreaterThan.php
    │   │   │   │   │   ├── IsAnything.php
    │   │   │   │   │   ├── IsEmpty.php
    │   │   │   │   │   ├── IsEqual.php
    │   │   │   │   │   ├── IsFalse.php
    │   │   │   │   │   ├── IsFinite.php
    │   │   │   │   │   ├── IsIdentical.php
    │   │   │   │   │   ├── IsInfinite.php
    │   │   │   │   │   ├── IsInstanceOf.php
    │   │   │   │   │   ├── IsJson.php
    │   │   │   │   │   ├── IsNan.php
    │   │   │   │   │   ├── IsNull.php
    │   │   │   │   │   ├── IsReadable.php
    │   │   │   │   │   ├── IsTrue.php
    │   │   │   │   │   ├── IsType.php
    │   │   │   │   │   ├── IsWritable.php
    │   │   │   │   │   ├── JsonMatches
    │   │   │   │   │   │   └── ErrorMessageProvider.php
    │   │   │   │   │   ├── JsonMatches.php
    │   │   │   │   │   ├── LessThan.php
    │   │   │   │   │   ├── Not.php
    │   │   │   │   │   ├── ObjectHasAttribute.php
    │   │   │   │   │   ├── Or.php
    │   │   │   │   │   ├── PCREMatch.php
    │   │   │   │   │   ├── SameSize.php
    │   │   │   │   │   ├── StringContains.php
    │   │   │   │   │   ├── StringEndsWith.php
    │   │   │   │   │   ├── StringMatches.php
    │   │   │   │   │   ├── StringStartsWith.php
    │   │   │   │   │   ├── TraversableContains.php
    │   │   │   │   │   ├── TraversableContainsOnly.php
    │   │   │   │   │   └── Xor.php
    │   │   │   │   ├── Constraint.php
    │   │   │   │   ├── CoveredCodeNotExecutedException.php
    │   │   │   │   ├── Error
    │   │   │   │   │   ├── Deprecated.php
    │   │   │   │   │   ├── Notice.php
    │   │   │   │   │   └── Warning.php
    │   │   │   │   ├── Error.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── ExceptionWrapper.php
    │   │   │   │   ├── ExpectationFailedException.php
    │   │   │   │   ├── IncompleteTest.php
    │   │   │   │   ├── IncompleteTestCase.php
    │   │   │   │   ├── IncompleteTestError.php
    │   │   │   │   ├── InvalidCoversTargetException.php
    │   │   │   │   ├── MissingCoversAnnotationException.php
    │   │   │   │   ├── OutputError.php
    │   │   │   │   ├── RiskyTest.php
    │   │   │   │   ├── RiskyTestError.php
    │   │   │   │   ├── SelfDescribing.php
    │   │   │   │   ├── SkippedTest.php
    │   │   │   │   ├── SkippedTestCase.php
    │   │   │   │   ├── SkippedTestError.php
    │   │   │   │   ├── SkippedTestSuiteError.php
    │   │   │   │   ├── SyntheticError.php
    │   │   │   │   ├── Test.php
    │   │   │   │   ├── TestCase.php
    │   │   │   │   ├── TestFailure.php
    │   │   │   │   ├── TestListener.php
    │   │   │   │   ├── TestResult.php
    │   │   │   │   ├── TestSuite
    │   │   │   │   │   └── DataProvider.php
    │   │   │   │   ├── TestSuite.php
    │   │   │   │   ├── UnintentionallyCoveredCodeError.php
    │   │   │   │   ├── Warning.php
    │   │   │   │   └── WarningTestCase.php
    │   │   │   ├── Runner
    │   │   │   │   ├── BaseTestRunner.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── Filter
    │   │   │   │   │   ├── Factory.php
    │   │   │   │   │   ├── Group
    │   │   │   │   │   │   ├── Exclude.php
    │   │   │   │   │   │   └── Include.php
    │   │   │   │   │   ├── Group.php
    │   │   │   │   │   └── Test.php
    │   │   │   │   ├── StandardTestSuiteLoader.php
    │   │   │   │   ├── TestSuiteLoader.php
    │   │   │   │   └── Version.php
    │   │   │   ├── TextUI
    │   │   │   │   ├── Command.php
    │   │   │   │   ├── ResultPrinter.php
    │   │   │   │   └── TestRunner.php
    │   │   │   └── Util
    │   │   │       ├── Blacklist.php
    │   │   │       ├── Configuration.php
    │   │   │       ├── ConfigurationGenerator.php
    │   │   │       ├── ErrorHandler.php
    │   │   │       ├── Fileloader.php
    │   │   │       ├── Filesystem.php
    │   │   │       ├── Filter.php
    │   │   │       ├── Getopt.php
    │   │   │       ├── GlobalState.php
    │   │   │       ├── InvalidArgumentHelper.php
    │   │   │       ├── Log
    │   │   │       │   ├── JSON.php
    │   │   │       │   ├── JUnit.php
    │   │   │       │   ├── TAP.php
    │   │   │       │   └── TeamCity.php
    │   │   │       ├── PHP
    │   │   │       │   ├── Default.php
    │   │   │       │   ├── Template
    │   │   │       │   │   └── TestCaseMethod.tpl.dist
    │   │   │       │   ├── Windows.php
    │   │   │       │   └── eval-stdin.php
    │   │   │       ├── PHP.php
    │   │   │       ├── Printer.php
    │   │   │       ├── Regex.php
    │   │   │       ├── String.php
    │   │   │       ├── Test.php
    │   │   │       ├── TestDox
    │   │   │       │   ├── NamePrettifier.php
    │   │   │       │   ├── ResultPrinter
    │   │   │       │   │   ├── HTML.php
    │   │   │       │   │   ├── Text.php
    │   │   │       │   │   └── XML.php
    │   │   │       │   └── ResultPrinter.php
    │   │   │       ├── TestSuiteIterator.php
    │   │   │       ├── Type.php
    │   │   │       └── XML.php
    │   │   └── tests
    │   │       ├── Extensions
    │   │       │   ├── PhptTestCaseTest.php
    │   │       │   └── RepeatedTestTest.php
    │   │       ├── Fail
    │   │       │   └── fail.phpt
    │   │       ├── Framework
    │   │       │   ├── AssertTest.php
    │   │       │   ├── BaseTestListenerTest.php
    │   │       │   ├── Constraint
    │   │       │   │   ├── ArraySubsetTest.php
    │   │       │   │   ├── CountTest.php
    │   │       │   │   ├── ExceptionMessageRegExpTest.php
    │   │       │   │   ├── ExceptionMessageTest.php
    │   │       │   │   ├── IsJsonTest.php
    │   │       │   │   ├── JsonMatches
    │   │       │   │   │   └── ErrorMessageProviderTest.php
    │   │       │   │   └── JsonMatchesTest.php
    │   │       │   ├── ConstraintTest.php
    │   │       │   ├── SuiteTest.php
    │   │       │   ├── TestCaseTest.php
    │   │       │   ├── TestFailureTest.php
    │   │       │   ├── TestImplementorTest.php
    │   │       │   └── TestListenerTest.php
    │   │       ├── Regression
    │   │       │   ├── GitHub
    │   │       │   │   ├── 1149
    │   │       │   │   │   └── Issue1149Test.php
    │   │       │   │   ├── 1149.phpt
    │   │       │   │   ├── 1216
    │   │       │   │   │   ├── Issue1216Test.php
    │   │       │   │   │   ├── bootstrap1216.php
    │   │       │   │   │   └── phpunit1216.xml
    │   │       │   │   ├── 1216.phpt
    │   │       │   │   ├── 1265
    │   │       │   │   │   ├── Issue1265Test.php
    │   │       │   │   │   └── phpunit1265.xml
    │   │       │   │   ├── 1265.phpt
    │   │       │   │   ├── 1330
    │   │       │   │   │   ├── Issue1330Test.php
    │   │       │   │   │   └── phpunit1330.xml
    │   │       │   │   ├── 1330.phpt
    │   │       │   │   ├── 1335
    │   │       │   │   │   ├── Issue1335Test.php
    │   │       │   │   │   └── bootstrap1335.php
    │   │       │   │   ├── 1335.phpt
    │   │       │   │   ├── 1337
    │   │       │   │   │   └── Issue1337Test.php
    │   │       │   │   ├── 1337.phpt
    │   │       │   │   ├── 1348
    │   │       │   │   │   └── Issue1348Test.php
    │   │       │   │   ├── 1348.phpt
    │   │       │   │   ├── 1351
    │   │       │   │   │   ├── ChildProcessClass1351.php
    │   │       │   │   │   └── Issue1351Test.php
    │   │       │   │   ├── 1351.phpt
    │   │       │   │   ├── 1374
    │   │       │   │   │   └── Issue1374Test.php
    │   │       │   │   ├── 1374.phpt
    │   │       │   │   ├── 1437
    │   │       │   │   │   └── Issue1437Test.php
    │   │       │   │   ├── 1437.phpt
    │   │       │   │   ├── 1468
    │   │       │   │   │   └── Issue1468Test.php
    │   │       │   │   ├── 1468.phpt
    │   │       │   │   ├── 1471
    │   │       │   │   │   └── Issue1471Test.php
    │   │       │   │   ├── 1471.phpt
    │   │       │   │   ├── 1472
    │   │       │   │   │   └── Issue1472Test.php
    │   │       │   │   ├── 1472.phpt
    │   │       │   │   ├── 1570
    │   │       │   │   │   └── Issue1570Test.php
    │   │       │   │   ├── 1570.phpt
    │   │       │   │   ├── 2137
    │   │       │   │   │   └── Issue2137Test.php
    │   │       │   │   ├── 2137-filter.phpt
    │   │       │   │   ├── 2137-no_filter.phpt
    │   │       │   │   ├── 2145
    │   │       │   │   │   └── Issue2145Test.php
    │   │       │   │   ├── 2145.phpt
    │   │       │   │   ├── 2158
    │   │       │   │   │   ├── Issue2158Test.php
    │   │       │   │   │   └── constant.inc
    │   │       │   │   ├── 2158.phpt
    │   │       │   │   ├── 2299
    │   │       │   │   │   └── Issue2299Test.php
    │   │       │   │   ├── 2366
    │   │       │   │   │   └── Issue2366Test.php
    │   │       │   │   ├── 2366.phpt
    │   │       │   │   ├── 2380
    │   │       │   │   │   └── Issue2380Test.php
    │   │       │   │   ├── 2380.phpt
    │   │       │   │   ├── 2382
    │   │       │   │   │   └── Issue2382Test.php
    │   │       │   │   ├── 2382.phpt
    │   │       │   │   ├── 2435
    │   │       │   │   │   └── Issue2435Test.php
    │   │       │   │   ├── 2435.phpt
    │   │       │   │   ├── 244
    │   │       │   │   │   └── Issue244Test.php
    │   │       │   │   ├── 244.phpt
    │   │       │   │   ├── 2731
    │   │       │   │   │   └── Issue2731Test.php
    │   │       │   │   ├── 2731.phpt
    │   │       │   │   ├── 2758
    │   │       │   │   │   ├── Issue2758Test.php
    │   │       │   │   │   ├── Issue2758TestListener.php
    │   │       │   │   │   └── phpunit.xml
    │   │       │   │   ├── 2758.phpt
    │   │       │   │   ├── 2811
    │   │       │   │   │   └── Issue2811Test.php
    │   │       │   │   ├── 2811.phpt
    │   │       │   │   ├── 2972
    │   │       │   │   │   ├── issue-2972-test.phpt
    │   │       │   │   │   └── unconventiallyNamedIssue2972Test.php
    │   │       │   │   ├── 2972.phpt
    │   │       │   │   ├── 322
    │   │       │   │   │   ├── Issue322Test.php
    │   │       │   │   │   └── phpunit322.xml
    │   │       │   │   ├── 322.phpt
    │   │       │   │   ├── 433
    │   │       │   │   │   └── Issue433Test.php
    │   │       │   │   ├── 433.phpt
    │   │       │   │   ├── 445
    │   │       │   │   │   └── Issue445Test.php
    │   │       │   │   ├── 445.phpt
    │   │       │   │   ├── 498
    │   │       │   │   │   └── Issue498Test.php
    │   │       │   │   ├── 498.phpt
    │   │       │   │   ├── 503
    │   │       │   │   │   └── Issue503Test.php
    │   │       │   │   ├── 503.phpt
    │   │       │   │   ├── 581
    │   │       │   │   │   └── Issue581Test.php
    │   │       │   │   ├── 581.phpt
    │   │       │   │   ├── 74
    │   │       │   │   │   ├── Issue74Test.php
    │   │       │   │   │   └── NewException.php
    │   │       │   │   ├── 74.phpt
    │   │       │   │   ├── 765
    │   │       │   │   │   └── Issue765Test.php
    │   │       │   │   ├── 765.phpt
    │   │       │   │   ├── 797
    │   │       │   │   │   ├── Issue797Test.php
    │   │       │   │   │   └── bootstrap797.php
    │   │       │   │   ├── 797.phpt
    │   │       │   │   ├── 863.phpt
    │   │       │   │   ├── 873
    │   │       │   │   │   └── Issue873Test.php
    │   │       │   │   ├── 873-php5.phpt
    │   │       │   │   └── 873-php7.phpt
    │   │       │   └── Trac
    │   │       │       ├── 1021
    │   │       │       │   └── Issue1021Test.php
    │   │       │       ├── 1021.phpt
    │   │       │       ├── 523
    │   │       │       │   └── Issue523Test.php
    │   │       │       ├── 523.phpt
    │   │       │       ├── 578
    │   │       │       │   └── Issue578Test.php
    │   │       │       ├── 578.phpt
    │   │       │       ├── 684
    │   │       │       │   └── Issue684Test.php
    │   │       │       ├── 684.phpt
    │   │       │       ├── 783
    │   │       │       │   ├── ChildSuite.php
    │   │       │       │   ├── OneTest.php
    │   │       │       │   ├── ParentSuite.php
    │   │       │       │   └── TwoTest.php
    │   │       │       └── 783.phpt
    │   │       ├── Runner
    │   │       │   └── BaseTestRunnerTest.php
    │   │       ├── TextUI
    │   │       │   ├── _files
    │   │       │   │   ├── expect_external.txt
    │   │       │   │   ├── phpt-env.expected.txt
    │   │       │   │   └── phpt_external.php
    │   │       │   ├── abstract-test-class.phpt
    │   │       │   ├── assertion.phpt
    │   │       │   ├── code-coverage-ignore.phpt
    │   │       │   ├── colors-always.phpt
    │   │       │   ├── concrete-test-class.phpt
    │   │       │   ├── custom-printer-debug.phpt
    │   │       │   ├── custom-printer-verbose.phpt
    │   │       │   ├── dataprovider-debug.phpt
    │   │       │   ├── dataprovider-issue-2833.phpt
    │   │       │   ├── dataprovider-issue-2859.phpt
    │   │       │   ├── dataprovider-issue-2922.phpt
    │   │       │   ├── dataprovider-log-xml-isolation.phpt
    │   │       │   ├── dataprovider-log-xml.phpt
    │   │       │   ├── dataprovider-testdox.phpt
    │   │       │   ├── debug.phpt
    │   │       │   ├── default-isolation.phpt
    │   │       │   ├── default.phpt
    │   │       │   ├── dependencies-clone.phpt
    │   │       │   ├── dependencies-isolation.phpt
    │   │       │   ├── dependencies.phpt
    │   │       │   ├── dependencies2-isolation.phpt
    │   │       │   ├── dependencies2.phpt
    │   │       │   ├── dependencies3-isolation.phpt
    │   │       │   ├── dependencies3.phpt
    │   │       │   ├── disable-code-coverage-ignore.phpt
    │   │       │   ├── empty-testcase.phpt
    │   │       │   ├── exception-stack.phpt
    │   │       │   ├── exclude-group-isolation.phpt
    │   │       │   ├── exclude-group.phpt
    │   │       │   ├── failure-isolation.phpt
    │   │       │   ├── failure-reverse-list.phpt
    │   │       │   ├── failure.phpt
    │   │       │   ├── fatal-isolation.phpt
    │   │       │   ├── filter-class-isolation.phpt
    │   │       │   ├── filter-class.phpt
    │   │       │   ├── filter-dataprovider-by-classname-and-range-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-classname-and-range.phpt
    │   │       │   ├── filter-dataprovider-by-number-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-number.phpt
    │   │       │   ├── filter-dataprovider-by-only-range-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-only-range.phpt
    │   │       │   ├── filter-dataprovider-by-only-regexp-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-only-regexp.phpt
    │   │       │   ├── filter-dataprovider-by-only-string-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-only-string.phpt
    │   │       │   ├── filter-dataprovider-by-range-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-range.phpt
    │   │       │   ├── filter-dataprovider-by-regexp-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-regexp.phpt
    │   │       │   ├── filter-dataprovider-by-string-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-string.phpt
    │   │       │   ├── filter-method-case-insensitive.phpt
    │   │       │   ├── filter-method-case-sensitive-no-result.phpt
    │   │       │   ├── filter-method-isolation.phpt
    │   │       │   ├── filter-method.phpt
    │   │       │   ├── filter-no-results.phpt
    │   │       │   ├── forward-compatibility.phpt
    │   │       │   ├── group-isolation.phpt
    │   │       │   ├── group.phpt
    │   │       │   ├── help.phpt
    │   │       │   ├── help2.phpt
    │   │       │   ├── ini-isolation.phpt
    │   │       │   ├── list-groups.phpt
    │   │       │   ├── list-suites.phpt
    │   │       │   ├── log-json-post-66021.phpt
    │   │       │   ├── log-junit.phpt
    │   │       │   ├── log-tap.phpt
    │   │       │   ├── log-teamcity.phpt
    │   │       │   ├── mycommand.phpt
    │   │       │   ├── options-after-arguments.phpt
    │   │       │   ├── output-isolation.phpt
    │   │       │   ├── phar-extension-suppressed.phpt
    │   │       │   ├── phar-extension.phpt
    │   │       │   ├── phpt-args.phpt
    │   │       │   ├── phpt-env.phpt
    │   │       │   ├── phpt-external.phpt
    │   │       │   ├── phpt-stderr.phpt
    │   │       │   ├── phpt-stdin.phpt
    │   │       │   ├── phpt-xfail.phpt
    │   │       │   ├── repeat.phpt
    │   │       │   ├── report-useless-tests-incomplete.phpt
    │   │       │   ├── report-useless-tests-isolation.phpt
    │   │       │   ├── report-useless-tests.phpt
    │   │       │   ├── stop-on-warning-via-cli.phpt
    │   │       │   ├── stop-on-warning-via-config.phpt
    │   │       │   ├── tap.phpt
    │   │       │   ├── teamcity-inner-exceptions.phpt
    │   │       │   ├── teamcity.phpt
    │   │       │   ├── test-suffix-multiple.phpt
    │   │       │   ├── test-suffix-single.phpt
    │   │       │   ├── testdox-exclude-group.phpt
    │   │       │   ├── testdox-group.phpt
    │   │       │   ├── testdox-html.phpt
    │   │       │   ├── testdox-text.phpt
    │   │       │   ├── testdox-xml.phpt
    │   │       │   └── testdox.phpt
    │   │       ├── Util
    │   │       │   ├── ConfigurationTest.php
    │   │       │   ├── GetoptTest.php
    │   │       │   ├── GlobalStateTest.php
    │   │       │   ├── PHPTest.php
    │   │       │   ├── RegexTest.php
    │   │       │   ├── TestDox
    │   │       │   │   └── NamePrettifierTest.php
    │   │       │   ├── TestTest.php
    │   │       │   └── XMLTest.php
    │   │       ├── _files
    │   │       │   ├── AbstractTest.php
    │   │       │   ├── ArrayAccessible.php
    │   │       │   ├── AssertionExample.php
    │   │       │   ├── AssertionExampleTest.php
    │   │       │   ├── Author.php
    │   │       │   ├── BankAccount.php
    │   │       │   ├── BankAccountTest.php
    │   │       │   ├── BankAccountTest.test.php
    │   │       │   ├── BankAccountTest2.php
    │   │       │   ├── BaseTestListenerSample.php
    │   │       │   ├── BeforeAndAfterTest.php
    │   │       │   ├── BeforeClassAndAfterClassTest.php
    │   │       │   ├── BeforeClassWithOnlyDataProviderTest.php
    │   │       │   ├── Book.php
    │   │       │   ├── Calculator.php
    │   │       │   ├── ChangeCurrentWorkingDirectoryTest.php
    │   │       │   ├── ClassWithNonPublicAttributes.php
    │   │       │   ├── ClassWithScalarTypeDeclarations.php
    │   │       │   ├── ClassWithToString.php
    │   │       │   ├── ClonedDependencyTest.php
    │   │       │   ├── ConcreteTest.my.php
    │   │       │   ├── ConcreteTest.php
    │   │       │   ├── CoverageClassExtendedTest.php
    │   │       │   ├── CoverageClassTest.php
    │   │       │   ├── CoverageFunctionParenthesesTest.php
    │   │       │   ├── CoverageFunctionParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageFunctionTest.php
    │   │       │   ├── CoverageMethodOneLineAnnotationTest.php
    │   │       │   ├── CoverageMethodParenthesesTest.php
    │   │       │   ├── CoverageMethodParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageMethodTest.php
    │   │       │   ├── CoverageNamespacedFunctionTest.php
    │   │       │   ├── CoverageNoneTest.php
    │   │       │   ├── CoverageNotPrivateTest.php
    │   │       │   ├── CoverageNotProtectedTest.php
    │   │       │   ├── CoverageNotPublicTest.php
    │   │       │   ├── CoverageNothingTest.php
    │   │       │   ├── CoveragePrivateTest.php
    │   │       │   ├── CoverageProtectedTest.php
    │   │       │   ├── CoveragePublicTest.php
    │   │       │   ├── CoverageTwoDefaultClassAnnotations.php
    │   │       │   ├── CoveredClass.php
    │   │       │   ├── CoveredFunction.php
    │   │       │   ├── CustomPrinter.php
    │   │       │   ├── DataProviderDebugTest.php
    │   │       │   ├── DataProviderDependencyTest.php
    │   │       │   ├── DataProviderFilterTest.php
    │   │       │   ├── DataProviderIncompleteTest.php
    │   │       │   ├── DataProviderIssue2833
    │   │       │   │   ├── FirstTest.php
    │   │       │   │   └── SecondTest.php
    │   │       │   ├── DataProviderIssue2859
    │   │       │   │   ├── phpunit.xml
    │   │       │   │   └── tests
    │   │       │   │       └── another
    │   │       │   │           └── TestWithDataProviderTest.php
    │   │       │   ├── DataProviderIssue2922
    │   │       │   │   ├── FirstTest.php
    │   │       │   │   └── SecondTest.php
    │   │       │   ├── DataProviderSkippedTest.php
    │   │       │   ├── DataProviderTest.php
    │   │       │   ├── DataProviderTestDoxTest.php
    │   │       │   ├── DependencyFailureTest.php
    │   │       │   ├── DependencySuccessTest.php
    │   │       │   ├── DependencyTestSuite.php
    │   │       │   ├── DoubleTestCase.php
    │   │       │   ├── DummyException.php
    │   │       │   ├── EmptyTestCaseTest.php
    │   │       │   ├── ExceptionInAssertPostConditionsTest.php
    │   │       │   ├── ExceptionInAssertPreConditionsTest.php
    │   │       │   ├── ExceptionInSetUpTest.php
    │   │       │   ├── ExceptionInTearDownTest.php
    │   │       │   ├── ExceptionInTest.php
    │   │       │   ├── ExceptionNamespaceTest.php
    │   │       │   ├── ExceptionStackTest.php
    │   │       │   ├── ExceptionTest.php
    │   │       │   ├── Failure.php
    │   │       │   ├── FailureTest.php
    │   │       │   ├── FatalTest.php
    │   │       │   ├── IgnoreCodeCoverageClass.php
    │   │       │   ├── IgnoreCodeCoverageClassTest.php
    │   │       │   ├── IncompleteTest.php
    │   │       │   ├── Inheritance
    │   │       │   │   ├── InheritanceA.php
    │   │       │   │   └── InheritanceB.php
    │   │       │   ├── InheritedTestCase.php
    │   │       │   ├── IniTest.php
    │   │       │   ├── IsolationTest.php
    │   │       │   ├── JsonData
    │   │       │   │   ├── arrayObject.json
    │   │       │   │   └── simpleObject.json
    │   │       │   ├── MockRunner.php
    │   │       │   ├── Mockable.php
    │   │       │   ├── MultiDependencyTest.php
    │   │       │   ├── MultipleDataProviderTest.php
    │   │       │   ├── MyCommand.php
    │   │       │   ├── NamespaceCoverageClassExtendedTest.php
    │   │       │   ├── NamespaceCoverageClassTest.php
    │   │       │   ├── NamespaceCoverageCoversClassPublicTest.php
    │   │       │   ├── NamespaceCoverageCoversClassTest.php
    │   │       │   ├── NamespaceCoverageMethodTest.php
    │   │       │   ├── NamespaceCoverageNotPrivateTest.php
    │   │       │   ├── NamespaceCoverageNotProtectedTest.php
    │   │       │   ├── NamespaceCoverageNotPublicTest.php
    │   │       │   ├── NamespaceCoveragePrivateTest.php
    │   │       │   ├── NamespaceCoverageProtectedTest.php
    │   │       │   ├── NamespaceCoveragePublicTest.php
    │   │       │   ├── NamespaceCoveredClass.php
    │   │       │   ├── NamespaceCoveredFunction.php
    │   │       │   ├── NoArgTestCaseTest.php
    │   │       │   ├── NoTestCaseClass.php
    │   │       │   ├── NoTestCases.php
    │   │       │   ├── NonStatic.php
    │   │       │   ├── NotExistingCoveredElementTest.php
    │   │       │   ├── NotPublicTestCase.php
    │   │       │   ├── NotVoidTestCase.php
    │   │       │   ├── NothingTest.php
    │   │       │   ├── OneTestCase.php
    │   │       │   ├── OutputTestCase.php
    │   │       │   ├── OverrideTestCase.php
    │   │       │   ├── RequirementsClassBeforeClassHookTest.php
    │   │       │   ├── RequirementsClassDocBlockTest.php
    │   │       │   ├── RequirementsTest.php
    │   │       │   ├── SampleArrayAccess.php
    │   │       │   ├── SampleClass.php
    │   │       │   ├── Singleton.php
    │   │       │   ├── StackTest.php
    │   │       │   ├── StatusTest.php
    │   │       │   ├── StopOnWarningTestSuite.php
    │   │       │   ├── StopsOnWarningTest.php
    │   │       │   ├── Struct.php
    │   │       │   ├── Success.php
    │   │       │   ├── TemplateMethodsTest.php
    │   │       │   ├── TestAutoreferenced.php
    │   │       │   ├── TestDoxGroupTest.php
    │   │       │   ├── TestGeneratorMaker.php
    │   │       │   ├── TestIncomplete.php
    │   │       │   ├── TestIterator.php
    │   │       │   ├── TestIterator2.php
    │   │       │   ├── TestSkipped.php
    │   │       │   ├── TestTestError.php
    │   │       │   ├── TestWithTest.php
    │   │       │   ├── ThrowExceptionTestCase.php
    │   │       │   ├── ThrowNoExceptionTestCase.php
    │   │       │   ├── WasRun.php
    │   │       │   ├── bar.xml
    │   │       │   ├── configuration.colors.empty.xml
    │   │       │   ├── configuration.colors.false.xml
    │   │       │   ├── configuration.colors.invalid.xml
    │   │       │   ├── configuration.colors.true.xml
    │   │       │   ├── configuration.custom-printer.xml
    │   │       │   ├── configuration.suites.xml
    │   │       │   ├── configuration.xml
    │   │       │   ├── configuration_empty.xml
    │   │       │   ├── configuration_stop_on_warning.xml
    │   │       │   ├── configuration_xinclude.xml
    │   │       │   ├── expectedFileFormat.txt
    │   │       │   ├── foo.xml
    │   │       │   ├── phpt-for-coverage.phpt
    │   │       │   ├── phpt-xfail.phpt
    │   │       │   ├── phpunit-example-extension
    │   │       │   │   ├── phpunit.xml
    │   │       │   │   ├── tests
    │   │       │   │   │   └── OneTest.php
    │   │       │   │   └── tools
    │   │       │   │       └── phpunit.d
    │   │       │   │           └── phpunit-example-extension-1.0.0.phar
    │   │       │   ├── structureAttributesAreSameButValuesAreNot.xml
    │   │       │   ├── structureExpected.xml
    │   │       │   ├── structureIgnoreTextNodes.xml
    │   │       │   ├── structureIsSameButDataIsNot.xml
    │   │       │   ├── structureWrongNumberOfAttributes.xml
    │   │       │   └── structureWrongNumberOfNodes.xml
    │   │       └── bootstrap.php
    │   └── phpunit-mock-objects
    │       ├── CONTRIBUTING.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── build.xml
    │       ├── composer.json
    │       ├── phpunit.xml
    │       ├── src
    │       │   └── Framework
    │       │       └── MockObject
    │       │           ├── Builder
    │       │           │   ├── Identity.php
    │       │           │   ├── InvocationMocker.php
    │       │           │   ├── Match.php
    │       │           │   ├── MethodNameMatch.php
    │       │           │   ├── Namespace.php
    │       │           │   ├── ParametersMatch.php
    │       │           │   └── Stub.php
    │       │           ├── Exception
    │       │           │   ├── BadMethodCallException.php
    │       │           │   ├── Exception.php
    │       │           │   └── RuntimeException.php
    │       │           ├── Generator
    │       │           │   ├── deprecation.tpl.dist
    │       │           │   ├── mocked_class.tpl.dist
    │       │           │   ├── mocked_class_method.tpl.dist
    │       │           │   ├── mocked_clone.tpl.dist
    │       │           │   ├── mocked_method.tpl.dist
    │       │           │   ├── mocked_method_void.tpl.dist
    │       │           │   ├── mocked_static_method.tpl.dist
    │       │           │   ├── proxied_method.tpl.dist
    │       │           │   ├── proxied_method_void.tpl.dist
    │       │           │   ├── trait_class.tpl.dist
    │       │           │   ├── unmocked_clone.tpl.dist
    │       │           │   ├── wsdl_class.tpl.dist
    │       │           │   └── wsdl_method.tpl.dist
    │       │           ├── Generator.php
    │       │           ├── Invocation
    │       │           │   ├── Object.php
    │       │           │   └── Static.php
    │       │           ├── Invocation.php
    │       │           ├── InvocationMocker.php
    │       │           ├── Invokable.php
    │       │           ├── Matcher
    │       │           │   ├── AnyInvokedCount.php
    │       │           │   ├── AnyParameters.php
    │       │           │   ├── ConsecutiveParameters.php
    │       │           │   ├── Invocation.php
    │       │           │   ├── InvokedAtIndex.php
    │       │           │   ├── InvokedAtLeastCount.php
    │       │           │   ├── InvokedAtLeastOnce.php
    │       │           │   ├── InvokedAtMostCount.php
    │       │           │   ├── InvokedCount.php
    │       │           │   ├── InvokedRecorder.php
    │       │           │   ├── MethodName.php
    │       │           │   ├── Parameters.php
    │       │           │   └── StatelessInvocation.php
    │       │           ├── Matcher.php
    │       │           ├── MockBuilder.php
    │       │           ├── MockObject.php
    │       │           ├── Stub
    │       │           │   ├── ConsecutiveCalls.php
    │       │           │   ├── Exception.php
    │       │           │   ├── MatcherCollection.php
    │       │           │   ├── Return.php
    │       │           │   ├── ReturnArgument.php
    │       │           │   ├── ReturnCallback.php
    │       │           │   ├── ReturnReference.php
    │       │           │   ├── ReturnSelf.php
    │       │           │   └── ReturnValueMap.php
    │       │           ├── Stub.php
    │       │           └── Verifiable.php
    │       └── tests
    │           ├── GeneratorTest.php
    │           ├── MockBuilderTest.php
    │           ├── MockObject
    │           │   ├── Builder
    │           │   │   └── InvocationMockerTest.php
    │           │   ├── Generator
    │           │   │   ├── 232.phpt
    │           │   │   ├── abstract_class.phpt
    │           │   │   ├── class.phpt
    │           │   │   ├── class_call_parent_clone.phpt
    │           │   │   ├── class_call_parent_constructor.phpt
    │           │   │   ├── class_dont_call_parent_clone.phpt
    │           │   │   ├── class_dont_call_parent_constructor.phpt
    │           │   │   ├── class_implementing_interface_call_parent_constructor.phpt
    │           │   │   ├── class_implementing_interface_dont_call_parent_constructor.phpt
    │           │   │   ├── class_partial.phpt
    │           │   │   ├── class_with_method_named_method.phpt
    │           │   │   ├── class_with_method_with_variadic_arguments.phpt
    │           │   │   ├── interface.phpt
    │           │   │   ├── invocation_object_clone_object.phpt
    │           │   │   ├── namespaced_class.phpt
    │           │   │   ├── namespaced_class_call_parent_clone.phpt
    │           │   │   ├── namespaced_class_call_parent_constructor.phpt
    │           │   │   ├── namespaced_class_dont_call_parent_clone.phpt
    │           │   │   ├── namespaced_class_dont_call_parent_constructor.phpt
    │           │   │   ├── namespaced_class_implementing_interface_call_parent_constructor.phpt
    │           │   │   ├── namespaced_class_implementing_interface_dont_call_parent_constructor.phpt
    │           │   │   ├── namespaced_class_partial.phpt
    │           │   │   ├── namespaced_interface.phpt
    │           │   │   ├── nonexistent_class.phpt
    │           │   │   ├── nonexistent_class_with_namespace.phpt
    │           │   │   ├── nonexistent_class_with_namespace_starting_with_separator.phpt
    │           │   │   ├── nullable_types.phpt
    │           │   │   ├── proxy.phpt
    │           │   │   ├── return_type_declarations_nullable.phpt
    │           │   │   ├── return_type_declarations_object_method.phpt
    │           │   │   ├── return_type_declarations_self.phpt
    │           │   │   ├── return_type_declarations_static_method.phpt
    │           │   │   ├── return_type_declarations_void.phpt
    │           │   │   ├── scalar_type_declarations.phpt
    │           │   │   ├── wsdl_class.phpt
    │           │   │   ├── wsdl_class_namespace.phpt
    │           │   │   └── wsdl_class_partial.phpt
    │           │   ├── Invocation
    │           │   │   ├── ObjectTest.php
    │           │   │   └── StaticTest.php
    │           │   ├── Matcher
    │           │   │   └── ConsecutiveParametersTest.php
    │           │   └── class_with_deprecated_method.phpt
    │           ├── MockObjectTest.php
    │           ├── ProxyObjectTest.php
    │           ├── _fixture
    │           │   ├── AbstractMockTestClass.php
    │           │   ├── AbstractTrait.php
    │           │   ├── AnInterface.php
    │           │   ├── AnInterfaceWithReturnType.php
    │           │   ├── AnotherInterface.php
    │           │   ├── Bar.php
    │           │   ├── ClassThatImplementsSerializable.php
    │           │   ├── ClassWithSelfTypeHint.php
    │           │   ├── ClassWithStaticMethod.php
    │           │   ├── Foo.php
    │           │   ├── FunctionCallback.php
    │           │   ├── GoogleSearch.wsdl
    │           │   ├── InterfaceWithSemiReservedMethodName.php
    │           │   ├── InterfaceWithStaticMethod.php
    │           │   ├── MethodCallback.php
    │           │   ├── MethodCallbackByReference.php
    │           │   ├── MockTestInterface.php
    │           │   ├── Mockable.php
    │           │   ├── PartialMockTestClass.php
    │           │   ├── SingletonClass.php
    │           │   ├── SomeClass.php
    │           │   ├── StaticMockTestClass.php
    │           │   ├── StringableClass.php
    │           │   └── TraversableMockTestInterface.php
    │           └── bootstrap.php
    ├── pimple
    │   └── pimple
    │       ├── CHANGELOG
    │       ├── LICENSE
    │       ├── README.rst
    │       ├── composer.json
    │       ├── ext
    │       │   └── pimple
    │       │       ├── README.md
    │       │       ├── config.m4
    │       │       ├── config.w32
    │       │       ├── php_pimple.h
    │       │       ├── pimple.c
    │       │       ├── pimple_compat.h
    │       │       └── tests
    │       │           ├── 001.phpt
    │       │           ├── 002.phpt
    │       │           ├── 003.phpt
    │       │           ├── 004.phpt
    │       │           ├── 005.phpt
    │       │           ├── 006.phpt
    │       │           ├── 007.phpt
    │       │           ├── 008.phpt
    │       │           ├── 009.phpt
    │       │           ├── 010.phpt
    │       │           ├── 011.phpt
    │       │           ├── 012.phpt
    │       │           ├── 013.phpt
    │       │           ├── 014.phpt
    │       │           ├── 015.phpt
    │       │           ├── 016.phpt
    │       │           ├── 017.phpt
    │       │           ├── 017_1.phpt
    │       │           ├── 018.phpt
    │       │           ├── 019.phpt
    │       │           ├── bench.phpb
    │       │           └── bench_shared.phpb
    │       ├── phpunit.xml.dist
    │       └── src
    │           └── Pimple
    │               ├── Container.php
    │               ├── Exception
    │               │   ├── ExpectedInvokableException.php
    │               │   ├── FrozenServiceException.php
    │               │   ├── InvalidServiceIdentifierException.php
    │               │   └── UnknownIdentifierException.php
    │               ├── Psr11
    │               │   ├── Container.php
    │               │   └── ServiceLocator.php
    │               ├── ServiceIterator.php
    │               ├── ServiceProviderInterface.php
    │               └── Tests
    │                   ├── Fixtures
    │                   │   ├── Invokable.php
    │                   │   ├── NonInvokable.php
    │                   │   ├── PimpleServiceProvider.php
    │                   │   └── Service.php
    │                   ├── PimpleServiceProviderInterfaceTest.php
    │                   ├── PimpleTest.php
    │                   ├── Psr11
    │                   │   ├── ContainerTest.php
    │                   │   └── ServiceLocatorTest.php
    │                   └── ServiceIteratorTest.php
    ├── psr
    │   ├── container
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── ContainerExceptionInterface.php
    │   │       ├── ContainerInterface.php
    │   │       └── NotFoundExceptionInterface.php
    │   ├── http-message
    │   │   ├── CHANGELOG.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── MessageInterface.php
    │   │       ├── RequestInterface.php
    │   │       ├── ResponseInterface.php
    │   │       ├── ServerRequestInterface.php
    │   │       ├── StreamInterface.php
    │   │       ├── UploadedFileInterface.php
    │   │       └── UriInterface.php
    │   └── log
    │       ├── LICENSE
    │       ├── Psr
    │       │   └── Log
    │       │       ├── AbstractLogger.php
    │       │       ├── InvalidArgumentException.php
    │       │       ├── LogLevel.php
    │       │       ├── LoggerAwareInterface.php
    │       │       ├── LoggerAwareTrait.php
    │       │       ├── LoggerInterface.php
    │       │       ├── LoggerTrait.php
    │       │       ├── NullLogger.php
    │       │       └── Test
    │       │           └── LoggerInterfaceTest.php
    │       ├── README.md
    │       └── composer.json
    ├── sebastian
    │   ├── code-unit-reverse-lookup
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   └── Wizard.php
    │   │   └── tests
    │   │       └── WizardTest.php
    │   ├── comparator
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build
    │   │   │   └── travis-ci.xml
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml.dist
    │   │   ├── src
    │   │   │   ├── ArrayComparator.php
    │   │   │   ├── Comparator.php
    │   │   │   ├── ComparisonFailure.php
    │   │   │   ├── DOMNodeComparator.php
    │   │   │   ├── DateTimeComparator.php
    │   │   │   ├── DoubleComparator.php
    │   │   │   ├── ExceptionComparator.php
    │   │   │   ├── Factory.php
    │   │   │   ├── MockObjectComparator.php
    │   │   │   ├── NumericComparator.php
    │   │   │   ├── ObjectComparator.php
    │   │   │   ├── ResourceComparator.php
    │   │   │   ├── ScalarComparator.php
    │   │   │   ├── SplObjectStorageComparator.php
    │   │   │   └── TypeComparator.php
    │   │   └── tests
    │   │       ├── ArrayComparatorTest.php
    │   │       ├── DOMNodeComparatorTest.php
    │   │       ├── DateTimeComparatorTest.php
    │   │       ├── DoubleComparatorTest.php
    │   │       ├── ExceptionComparatorTest.php
    │   │       ├── FactoryTest.php
    │   │       ├── MockObjectComparatorTest.php
    │   │       ├── NumericComparatorTest.php
    │   │       ├── ObjectComparatorTest.php
    │   │       ├── ResourceComparatorTest.php
    │   │       ├── ScalarComparatorTest.php
    │   │       ├── SplObjectStorageComparatorTest.php
    │   │       ├── TypeComparatorTest.php
    │   │       ├── _files
    │   │       │   ├── Author.php
    │   │       │   ├── Book.php
    │   │       │   ├── ClassWithToString.php
    │   │       │   ├── SampleClass.php
    │   │       │   ├── Struct.php
    │   │       │   ├── TestClass.php
    │   │       │   └── TestClassComparator.php
    │   │       ├── autoload.php
    │   │       └── bootstrap.php
    │   ├── diff
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Chunk.php
    │   │   │   ├── Diff.php
    │   │   │   ├── Differ.php
    │   │   │   ├── LCS
    │   │   │   │   ├── LongestCommonSubsequence.php
    │   │   │   │   ├── MemoryEfficientLongestCommonSubsequenceImplementation.php
    │   │   │   │   └── TimeEfficientLongestCommonSubsequenceImplementation.php
    │   │   │   ├── Line.php
    │   │   │   └── Parser.php
    │   │   └── tests
    │   │       ├── ChunkTest.php
    │   │       ├── DiffTest.php
    │   │       ├── DifferTest.php
    │   │       ├── LCS
    │   │       │   ├── LongestCommonSubsequenceTest.php
    │   │       │   ├── MemoryEfficientImplementationTest.php
    │   │       │   └── TimeEfficientImplementationTest.php
    │   │       ├── LineTest.php
    │   │       ├── ParserTest.php
    │   │       └── fixtures
    │   │           ├── patch.txt
    │   │           └── patch2.txt
    │   ├── environment
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Console.php
    │   │   │   └── Runtime.php
    │   │   └── tests
    │   │       ├── ConsoleTest.php
    │   │       └── RuntimeTest.php
    │   ├── exporter
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml.dist
    │   │   ├── src
    │   │   │   └── Exporter.php
    │   │   └── tests
    │   │       └── ExporterTest.php
    │   ├── global-state
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml.dist
    │   │   ├── src
    │   │   │   ├── Blacklist.php
    │   │   │   ├── CodeExporter.php
    │   │   │   ├── Exception.php
    │   │   │   ├── Restorer.php
    │   │   │   ├── RuntimeException.php
    │   │   │   └── Snapshot.php
    │   │   └── tests
    │   │       ├── BlacklistTest.php
    │   │       ├── SnapshotTest.php
    │   │       └── _fixture
    │   │           ├── BlacklistedChildClass.php
    │   │           ├── BlacklistedClass.php
    │   │           ├── BlacklistedImplementor.php
    │   │           ├── BlacklistedInterface.php
    │   │           ├── SnapshotClass.php
    │   │           ├── SnapshotDomDocument.php
    │   │           ├── SnapshotFunctions.php
    │   │           └── SnapshotTrait.php
    │   ├── object-enumerator
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Enumerator.php
    │   │   │   ├── Exception.php
    │   │   │   └── InvalidArgumentException.php
    │   │   └── tests
    │   │       ├── EnumeratorTest.php
    │   │       └── Fixtures
    │   │           └── ExceptionThrower.php
    │   ├── recursion-context
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml.dist
    │   │   ├── src
    │   │   │   ├── Context.php
    │   │   │   ├── Exception.php
    │   │   │   └── InvalidArgumentException.php
    │   │   └── tests
    │   │       └── ContextTest.php
    │   ├── resource-operations
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build
    │   │   │   └── generate.php
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── ResourceOperations.php
    │   └── version
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           └── Version.php
    ├── slim
    │   ├── csrf
    │   │   ├── CHANGELOG.md
    │   │   ├── LICENSE.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── Guard.php
    │   ├── flash
    │   │   ├── CONTRIBUTING.md
    │   │   ├── LICENSE.md
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   ├── phpunit.xml.dist
    │   │   ├── src
    │   │   │   └── Messages.php
    │   │   └── tests
    │   │       ├── MessagesTest.php
    │   │       └── bootstrap.php
    │   ├── pdo
    │   │   ├── CHANGELOG.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   ├── docs
    │   │   │   ├── AGGREGATES.md
    │   │   │   ├── Clause
    │   │   │   │   ├── GROUP_BY.md
    │   │   │   │   ├── HAVING.md
    │   │   │   │   ├── JOIN.md
    │   │   │   │   ├── LIMIT.md
    │   │   │   │   ├── OFFSET.md
    │   │   │   │   ├── ORDER_BY.md
    │   │   │   │   └── WHERE.md
    │   │   │   ├── README.md
    │   │   │   └── Statement
    │   │   │       ├── DELETE.md
    │   │   │       ├── INSERT.md
    │   │   │       ├── SELECT.md
    │   │   │       └── UPDATE.md
    │   │   └── src
    │   │       └── PDO
    │   │           ├── Clause
    │   │           │   ├── ClauseContainer.php
    │   │           │   ├── GroupClause.php
    │   │           │   ├── HavingClause.php
    │   │           │   ├── JoinClause.php
    │   │           │   ├── LimitClause.php
    │   │           │   ├── OffsetClause.php
    │   │           │   ├── OrderClause.php
    │   │           │   └── WhereClause.php
    │   │           ├── Database.php
    │   │           ├── Statement
    │   │           │   ├── DeleteStatement.php
    │   │           │   ├── InsertStatement.php
    │   │           │   ├── SelectStatement.php
    │   │           │   ├── StatementContainer.php
    │   │           │   └── UpdateStatement.php
    │   │           └── Statement.php
    │   ├── php-view
    │   │   ├── LICENSE.md
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   ├── phpunit.xml.dist
    │   │   ├── src
    │   │   │   └── PhpRenderer.php
    │   │   └── tests
    │   │       ├── PhpRendererTest.php
    │   │       ├── bootstrap.php
    │   │       ├── testException.php
    │   │       └── testTemplate.php
    │   └── slim
    │       ├── CODE_OF_CONDUCT.md
    │       ├── LICENSE.md
    │       ├── Slim
    │       │   ├── App.php
    │       │   ├── CallableResolver.php
    │       │   ├── CallableResolverAwareTrait.php
    │       │   ├── Collection.php
    │       │   ├── Container.php
    │       │   ├── DefaultServicesProvider.php
    │       │   ├── DeferredCallable.php
    │       │   ├── Exception
    │       │   │   ├── ContainerException.php
    │       │   │   ├── ContainerValueNotFoundException.php
    │       │   │   ├── InvalidMethodException.php
    │       │   │   ├── MethodNotAllowedException.php
    │       │   │   ├── NotFoundException.php
    │       │   │   └── SlimException.php
    │       │   ├── Handlers
    │       │   │   ├── AbstractError.php
    │       │   │   ├── AbstractHandler.php
    │       │   │   ├── Error.php
    │       │   │   ├── NotAllowed.php
    │       │   │   ├── NotFound.php
    │       │   │   ├── PhpError.php
    │       │   │   └── Strategies
    │       │   │       ├── RequestResponse.php
    │       │   │       └── RequestResponseArgs.php
    │       │   ├── Http
    │       │   │   ├── Body.php
    │       │   │   ├── Cookies.php
    │       │   │   ├── Environment.php
    │       │   │   ├── Headers.php
    │       │   │   ├── Message.php
    │       │   │   ├── Request.php
    │       │   │   ├── RequestBody.php
    │       │   │   ├── Response.php
    │       │   │   ├── StatusCode.php
    │       │   │   ├── Stream.php
    │       │   │   ├── UploadedFile.php
    │       │   │   └── Uri.php
    │       │   ├── Interfaces
    │       │   │   ├── CallableResolverInterface.php
    │       │   │   ├── CollectionInterface.php
    │       │   │   ├── Http
    │       │   │   │   ├── CookiesInterface.php
    │       │   │   │   ├── EnvironmentInterface.php
    │       │   │   │   └── HeadersInterface.php
    │       │   │   ├── InvocationStrategyInterface.php
    │       │   │   ├── RouteGroupInterface.php
    │       │   │   ├── RouteInterface.php
    │       │   │   └── RouterInterface.php
    │       │   ├── MiddlewareAwareTrait.php
    │       │   ├── Routable.php
    │       │   ├── Route.php
    │       │   ├── RouteGroup.php
    │       │   └── Router.php
    │       └── composer.json
    ├── symfony
    │   ├── console
    │   │   ├── Application.php
    │   │   ├── CHANGELOG.md
    │   │   ├── Command
    │   │   │   ├── Command.php
    │   │   │   ├── HelpCommand.php
    │   │   │   ├── ListCommand.php
    │   │   │   └── LockableTrait.php
    │   │   ├── CommandLoader
    │   │   │   ├── CommandLoaderInterface.php
    │   │   │   ├── ContainerCommandLoader.php
    │   │   │   └── FactoryCommandLoader.php
    │   │   ├── ConsoleEvents.php
    │   │   ├── DependencyInjection
    │   │   │   └── AddConsoleCommandPass.php
    │   │   ├── Descriptor
    │   │   │   ├── ApplicationDescription.php
    │   │   │   ├── Descriptor.php
    │   │   │   ├── DescriptorInterface.php
    │   │   │   ├── JsonDescriptor.php
    │   │   │   ├── MarkdownDescriptor.php
    │   │   │   ├── TextDescriptor.php
    │   │   │   └── XmlDescriptor.php
    │   │   ├── Event
    │   │   │   ├── ConsoleCommandEvent.php
    │   │   │   ├── ConsoleErrorEvent.php
    │   │   │   ├── ConsoleEvent.php
    │   │   │   ├── ConsoleExceptionEvent.php
    │   │   │   └── ConsoleTerminateEvent.php
    │   │   ├── EventListener
    │   │   │   └── ErrorListener.php
    │   │   ├── Exception
    │   │   │   ├── CommandNotFoundException.php
    │   │   │   ├── ExceptionInterface.php
    │   │   │   ├── InvalidArgumentException.php
    │   │   │   ├── InvalidOptionException.php
    │   │   │   ├── LogicException.php
    │   │   │   └── RuntimeException.php
    │   │   ├── Formatter
    │   │   │   ├── OutputFormatter.php
    │   │   │   ├── OutputFormatterInterface.php
    │   │   │   ├── OutputFormatterStyle.php
    │   │   │   ├── OutputFormatterStyleInterface.php
    │   │   │   └── OutputFormatterStyleStack.php
    │   │   ├── Helper
    │   │   │   ├── DebugFormatterHelper.php
    │   │   │   ├── DescriptorHelper.php
    │   │   │   ├── FormatterHelper.php
    │   │   │   ├── Helper.php
    │   │   │   ├── HelperInterface.php
    │   │   │   ├── HelperSet.php
    │   │   │   ├── InputAwareHelper.php
    │   │   │   ├── ProcessHelper.php
    │   │   │   ├── ProgressBar.php
    │   │   │   ├── ProgressIndicator.php
    │   │   │   ├── QuestionHelper.php
    │   │   │   ├── SymfonyQuestionHelper.php
    │   │   │   ├── Table.php
    │   │   │   ├── TableCell.php
    │   │   │   ├── TableSeparator.php
    │   │   │   └── TableStyle.php
    │   │   ├── Input
    │   │   │   ├── ArgvInput.php
    │   │   │   ├── ArrayInput.php
    │   │   │   ├── Input.php
    │   │   │   ├── InputArgument.php
    │   │   │   ├── InputAwareInterface.php
    │   │   │   ├── InputDefinition.php
    │   │   │   ├── InputInterface.php
    │   │   │   ├── InputOption.php
    │   │   │   ├── StreamableInputInterface.php
    │   │   │   └── StringInput.php
    │   │   ├── LICENSE
    │   │   ├── Logger
    │   │   │   └── ConsoleLogger.php
    │   │   ├── Output
    │   │   │   ├── BufferedOutput.php
    │   │   │   ├── ConsoleOutput.php
    │   │   │   ├── ConsoleOutputInterface.php
    │   │   │   ├── NullOutput.php
    │   │   │   ├── Output.php
    │   │   │   ├── OutputInterface.php
    │   │   │   └── StreamOutput.php
    │   │   ├── Question
    │   │   │   ├── ChoiceQuestion.php
    │   │   │   ├── ConfirmationQuestion.php
    │   │   │   └── Question.php
    │   │   ├── README.md
    │   │   ├── Resources
    │   │   │   └── bin
    │   │   │       └── hiddeninput.exe
    │   │   ├── Style
    │   │   │   ├── OutputStyle.php
    │   │   │   ├── StyleInterface.php
    │   │   │   └── SymfonyStyle.php
    │   │   ├── Terminal.php
    │   │   ├── Tester
    │   │   │   ├── ApplicationTester.php
    │   │   │   └── CommandTester.php
    │   │   ├── Tests
    │   │   │   ├── ApplicationTest.php
    │   │   │   ├── Command
    │   │   │   │   ├── CommandTest.php
    │   │   │   │   ├── HelpCommandTest.php
    │   │   │   │   ├── ListCommandTest.php
    │   │   │   │   └── LockableTraitTest.php
    │   │   │   ├── CommandLoader
    │   │   │   │   ├── ContainerCommandLoaderTest.php
    │   │   │   │   └── FactoryCommandLoaderTest.php
    │   │   │   ├── DependencyInjection
    │   │   │   │   └── AddConsoleCommandPassTest.php
    │   │   │   ├── Descriptor
    │   │   │   │   ├── AbstractDescriptorTest.php
    │   │   │   │   ├── JsonDescriptorTest.php
    │   │   │   │   ├── MarkdownDescriptorTest.php
    │   │   │   │   ├── ObjectsProvider.php
    │   │   │   │   ├── TextDescriptorTest.php
    │   │   │   │   └── XmlDescriptorTest.php
    │   │   │   ├── EventListener
    │   │   │   │   └── ErrorListenerTest.php
    │   │   │   ├── Fixtures
    │   │   │   │   ├── BarBucCommand.php
    │   │   │   │   ├── DescriptorApplication1.php
    │   │   │   │   ├── DescriptorApplication2.php
    │   │   │   │   ├── DescriptorApplicationMbString.php
    │   │   │   │   ├── DescriptorCommand1.php
    │   │   │   │   ├── DescriptorCommand2.php
    │   │   │   │   ├── DescriptorCommand3.php
    │   │   │   │   ├── DescriptorCommand4.php
    │   │   │   │   ├── DescriptorCommandMbString.php
    │   │   │   │   ├── DummyOutput.php
    │   │   │   │   ├── Foo1Command.php
    │   │   │   │   ├── Foo2Command.php
    │   │   │   │   ├── Foo3Command.php
    │   │   │   │   ├── Foo4Command.php
    │   │   │   │   ├── Foo5Command.php
    │   │   │   │   ├── Foo6Command.php
    │   │   │   │   ├── FooCommand.php
    │   │   │   │   ├── FooLock2Command.php
    │   │   │   │   ├── FooLockCommand.php
    │   │   │   │   ├── FooOptCommand.php
    │   │   │   │   ├── FooSameCaseLowercaseCommand.php
    │   │   │   │   ├── FooSameCaseUppercaseCommand.php
    │   │   │   │   ├── FooSubnamespaced1Command.php
    │   │   │   │   ├── FooSubnamespaced2Command.php
    │   │   │   │   ├── FoobarCommand.php
    │   │   │   │   ├── Style
    │   │   │   │   │   └── SymfonyStyle
    │   │   │   │   │       ├── command
    │   │   │   │   │       │   ├── command_0.php
    │   │   │   │   │       │   ├── command_1.php
    │   │   │   │   │       │   ├── command_10.php
    │   │   │   │   │       │   ├── command_11.php
    │   │   │   │   │       │   ├── command_12.php
    │   │   │   │   │       │   ├── command_13.php
    │   │   │   │   │       │   ├── command_14.php
    │   │   │   │   │       │   ├── command_15.php
    │   │   │   │   │       │   ├── command_16.php
    │   │   │   │   │       │   ├── command_17.php
    │   │   │   │   │       │   ├── command_2.php
    │   │   │   │   │       │   ├── command_3.php
    │   │   │   │   │       │   ├── command_4.php
    │   │   │   │   │       │   ├── command_5.php
    │   │   │   │   │       │   ├── command_6.php
    │   │   │   │   │       │   ├── command_7.php
    │   │   │   │   │       │   ├── command_8.php
    │   │   │   │   │       │   ├── command_9.php
    │   │   │   │   │       │   └── interactive_command_1.php
    │   │   │   │   │       └── output
    │   │   │   │   │           ├── interactive_output_1.txt
    │   │   │   │   │           ├── output_0.txt
    │   │   │   │   │           ├── output_1.txt
    │   │   │   │   │           ├── output_10.txt
    │   │   │   │   │           ├── output_11.txt
    │   │   │   │   │           ├── output_12.txt
    │   │   │   │   │           ├── output_13.txt
    │   │   │   │   │           ├── output_14.txt
    │   │   │   │   │           ├── output_15.txt
    │   │   │   │   │           ├── output_16.txt
    │   │   │   │   │           ├── output_17.txt
    │   │   │   │   │           ├── output_2.txt
    │   │   │   │   │           ├── output_3.txt
    │   │   │   │   │           ├── output_4.txt
    │   │   │   │   │           ├── output_5.txt
    │   │   │   │   │           ├── output_6.txt
    │   │   │   │   │           ├── output_7.txt
    │   │   │   │   │           ├── output_8.txt
    │   │   │   │   │           └── output_9.txt
    │   │   │   │   ├── TestCommand.php
    │   │   │   │   ├── TestTiti.php
    │   │   │   │   ├── TestToto.php
    │   │   │   │   ├── application_1.json
    │   │   │   │   ├── application_1.md
    │   │   │   │   ├── application_1.txt
    │   │   │   │   ├── application_1.xml
    │   │   │   │   ├── application_2.json
    │   │   │   │   ├── application_2.md
    │   │   │   │   ├── application_2.txt
    │   │   │   │   ├── application_2.xml
    │   │   │   │   ├── application_filtered_namespace.txt
    │   │   │   │   ├── application_gethelp.txt
    │   │   │   │   ├── application_mbstring.md
    │   │   │   │   ├── application_mbstring.txt
    │   │   │   │   ├── application_renderexception1.txt
    │   │   │   │   ├── application_renderexception2.txt
    │   │   │   │   ├── application_renderexception3.txt
    │   │   │   │   ├── application_renderexception3decorated.txt
    │   │   │   │   ├── application_renderexception4.txt
    │   │   │   │   ├── application_renderexception_doublewidth1.txt
    │   │   │   │   ├── application_renderexception_doublewidth1decorated.txt
    │   │   │   │   ├── application_renderexception_doublewidth2.txt
    │   │   │   │   ├── application_renderexception_escapeslines.txt
    │   │   │   │   ├── application_renderexception_linebreaks.txt
    │   │   │   │   ├── application_run1.txt
    │   │   │   │   ├── application_run2.txt
    │   │   │   │   ├── application_run3.txt
    │   │   │   │   ├── application_run4.txt
    │   │   │   │   ├── command_1.json
    │   │   │   │   ├── command_1.md
    │   │   │   │   ├── command_1.txt
    │   │   │   │   ├── command_1.xml
    │   │   │   │   ├── command_2.json
    │   │   │   │   ├── command_2.md
    │   │   │   │   ├── command_2.txt
    │   │   │   │   ├── command_2.xml
    │   │   │   │   ├── command_mbstring.md
    │   │   │   │   ├── command_mbstring.txt
    │   │   │   │   ├── input_argument_1.json
    │   │   │   │   ├── input_argument_1.md
    │   │   │   │   ├── input_argument_1.txt
    │   │   │   │   ├── input_argument_1.xml
    │   │   │   │   ├── input_argument_2.json
    │   │   │   │   ├── input_argument_2.md
    │   │   │   │   ├── input_argument_2.txt
    │   │   │   │   ├── input_argument_2.xml
    │   │   │   │   ├── input_argument_3.json
    │   │   │   │   ├── input_argument_3.md
    │   │   │   │   ├── input_argument_3.txt
    │   │   │   │   ├── input_argument_3.xml
    │   │   │   │   ├── input_argument_4.json
    │   │   │   │   ├── input_argument_4.md
    │   │   │   │   ├── input_argument_4.txt
    │   │   │   │   ├── input_argument_4.xml
    │   │   │   │   ├── input_argument_with_default_inf_value.json
    │   │   │   │   ├── input_argument_with_default_inf_value.md
    │   │   │   │   ├── input_argument_with_default_inf_value.txt
    │   │   │   │   ├── input_argument_with_default_inf_value.xml
    │   │   │   │   ├── input_argument_with_style.json
    │   │   │   │   ├── input_argument_with_style.md
    │   │   │   │   ├── input_argument_with_style.txt
    │   │   │   │   ├── input_argument_with_style.xml
    │   │   │   │   ├── input_definition_1.json
    │   │   │   │   ├── input_definition_1.md
    │   │   │   │   ├── input_definition_1.txt
    │   │   │   │   ├── input_definition_1.xml
    │   │   │   │   ├── input_definition_2.json
    │   │   │   │   ├── input_definition_2.md
    │   │   │   │   ├── input_definition_2.txt
    │   │   │   │   ├── input_definition_2.xml
    │   │   │   │   ├── input_definition_3.json
    │   │   │   │   ├── input_definition_3.md
    │   │   │   │   ├── input_definition_3.txt
    │   │   │   │   ├── input_definition_3.xml
    │   │   │   │   ├── input_definition_4.json
    │   │   │   │   ├── input_definition_4.md
    │   │   │   │   ├── input_definition_4.txt
    │   │   │   │   ├── input_definition_4.xml
    │   │   │   │   ├── input_option_1.json
    │   │   │   │   ├── input_option_1.md
    │   │   │   │   ├── input_option_1.txt
    │   │   │   │   ├── input_option_1.xml
    │   │   │   │   ├── input_option_2.json
    │   │   │   │   ├── input_option_2.md
    │   │   │   │   ├── input_option_2.txt
    │   │   │   │   ├── input_option_2.xml
    │   │   │   │   ├── input_option_3.json
    │   │   │   │   ├── input_option_3.md
    │   │   │   │   ├── input_option_3.txt
    │   │   │   │   ├── input_option_3.xml
    │   │   │   │   ├── input_option_4.json
    │   │   │   │   ├── input_option_4.md
    │   │   │   │   ├── input_option_4.txt
    │   │   │   │   ├── input_option_4.xml
    │   │   │   │   ├── input_option_5.json
    │   │   │   │   ├── input_option_5.md
    │   │   │   │   ├── input_option_5.txt
    │   │   │   │   ├── input_option_5.xml
    │   │   │   │   ├── input_option_6.json
    │   │   │   │   ├── input_option_6.md
    │   │   │   │   ├── input_option_6.txt
    │   │   │   │   ├── input_option_6.xml
    │   │   │   │   ├── input_option_with_default_inf_value.json
    │   │   │   │   ├── input_option_with_default_inf_value.md
    │   │   │   │   ├── input_option_with_default_inf_value.txt
    │   │   │   │   ├── input_option_with_default_inf_value.xml
    │   │   │   │   ├── input_option_with_style.json
    │   │   │   │   ├── input_option_with_style.md
    │   │   │   │   ├── input_option_with_style.txt
    │   │   │   │   ├── input_option_with_style.xml
    │   │   │   │   ├── input_option_with_style_array.json
    │   │   │   │   ├── input_option_with_style_array.md
    │   │   │   │   ├── input_option_with_style_array.txt
    │   │   │   │   └── input_option_with_style_array.xml
    │   │   │   ├── Formatter
    │   │   │   │   ├── OutputFormatterStyleStackTest.php
    │   │   │   │   ├── OutputFormatterStyleTest.php
    │   │   │   │   └── OutputFormatterTest.php
    │   │   │   ├── Helper
    │   │   │   │   ├── AbstractQuestionHelperTest.php
    │   │   │   │   ├── FormatterHelperTest.php
    │   │   │   │   ├── HelperSetTest.php
    │   │   │   │   ├── HelperTest.php
    │   │   │   │   ├── ProcessHelperTest.php
    │   │   │   │   ├── ProgressBarTest.php
    │   │   │   │   ├── ProgressIndicatorTest.php
    │   │   │   │   ├── QuestionHelperTest.php
    │   │   │   │   ├── SymfonyQuestionHelperTest.php
    │   │   │   │   ├── TableStyleTest.php
    │   │   │   │   └── TableTest.php
    │   │   │   ├── Input
    │   │   │   │   ├── ArgvInputTest.php
    │   │   │   │   ├── ArrayInputTest.php
    │   │   │   │   ├── InputArgumentTest.php
    │   │   │   │   ├── InputDefinitionTest.php
    │   │   │   │   ├── InputOptionTest.php
    │   │   │   │   ├── InputTest.php
    │   │   │   │   └── StringInputTest.php
    │   │   │   ├── Logger
    │   │   │   │   └── ConsoleLoggerTest.php
    │   │   │   ├── Output
    │   │   │   │   ├── ConsoleOutputTest.php
    │   │   │   │   ├── NullOutputTest.php
    │   │   │   │   ├── OutputTest.php
    │   │   │   │   └── StreamOutputTest.php
    │   │   │   ├── Style
    │   │   │   │   └── SymfonyStyleTest.php
    │   │   │   ├── TerminalTest.php
    │   │   │   └── Tester
    │   │   │       ├── ApplicationTesterTest.php
    │   │   │       └── CommandTesterTest.php
    │   │   ├── composer.json
    │   │   └── phpunit.xml.dist
    │   ├── debug
    │   │   ├── BufferingLogger.php
    │   │   ├── CHANGELOG.md
    │   │   ├── Debug.php
    │   │   ├── DebugClassLoader.php
    │   │   ├── ErrorHandler.php
    │   │   ├── Exception
    │   │   │   ├── ClassNotFoundException.php
    │   │   │   ├── FatalErrorException.php
    │   │   │   ├── FatalThrowableError.php
    │   │   │   ├── FlattenException.php
    │   │   │   ├── OutOfMemoryException.php
    │   │   │   ├── SilencedErrorContext.php
    │   │   │   ├── UndefinedFunctionException.php
    │   │   │   └── UndefinedMethodException.php
    │   │   ├── ExceptionHandler.php
    │   │   ├── FatalErrorHandler
    │   │   │   ├── ClassNotFoundFatalErrorHandler.php
    │   │   │   ├── FatalErrorHandlerInterface.php
    │   │   │   ├── UndefinedFunctionFatalErrorHandler.php
    │   │   │   └── UndefinedMethodFatalErrorHandler.php
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── Tests
    │   │   │   ├── DebugClassLoaderTest.php
    │   │   │   ├── ErrorHandlerTest.php
    │   │   │   ├── Exception
    │   │   │   │   └── FlattenExceptionTest.php
    │   │   │   ├── ExceptionHandlerTest.php
    │   │   │   ├── FatalErrorHandler
    │   │   │   │   ├── ClassNotFoundFatalErrorHandlerTest.php
    │   │   │   │   ├── UndefinedFunctionFatalErrorHandlerTest.php
    │   │   │   │   └── UndefinedMethodFatalErrorHandlerTest.php
    │   │   │   ├── Fixtures
    │   │   │   │   ├── AnnotatedClass.php
    │   │   │   │   ├── ClassAlias.php
    │   │   │   │   ├── DeprecatedClass.php
    │   │   │   │   ├── DeprecatedInterface.php
    │   │   │   │   ├── ExtendedFinalMethod.php
    │   │   │   │   ├── FinalClass.php
    │   │   │   │   ├── FinalMethod.php
    │   │   │   │   ├── FinalMethod2Trait.php
    │   │   │   │   ├── InternalClass.php
    │   │   │   │   ├── InternalInterface.php
    │   │   │   │   ├── InternalTrait.php
    │   │   │   │   ├── InternalTrait2.php
    │   │   │   │   ├── NonDeprecatedInterface.php
    │   │   │   │   ├── PEARClass.php
    │   │   │   │   ├── Throwing.php
    │   │   │   │   ├── ToStringThrower.php
    │   │   │   │   ├── TraitWithInternalMethod.php
    │   │   │   │   ├── casemismatch.php
    │   │   │   │   ├── notPsr0Bis.php
    │   │   │   │   ├── psr4
    │   │   │   │   │   └── Psr4CaseMismatch.php
    │   │   │   │   └── reallyNotPsr0.php
    │   │   │   ├── Fixtures2
    │   │   │   │   └── RequiredTwice.php
    │   │   │   ├── HeaderMock.php
    │   │   │   ├── MockExceptionHandler.php
    │   │   │   └── phpt
    │   │   │       ├── debug_class_loader.phpt
    │   │   │       ├── decorate_exception_hander.phpt
    │   │   │       ├── exception_rethrown.phpt
    │   │   │       └── fatal_with_nested_handlers.phpt
    │   │   ├── composer.json
    │   │   └── phpunit.xml.dist
    │   ├── polyfill-ctype
    │   │   ├── Ctype.php
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── bootstrap.php
    │   │   └── composer.json
    │   ├── polyfill-mbstring
    │   │   ├── LICENSE
    │   │   ├── Mbstring.php
    │   │   ├── README.md
    │   │   ├── Resources
    │   │   │   └── unidata
    │   │   │       ├── lowerCase.php
    │   │   │       ├── titleCaseRegexp.php
    │   │   │       └── upperCase.php
    │   │   ├── bootstrap.php
    │   │   └── composer.json
    │   └── yaml
    │       ├── CHANGELOG.md
    │       ├── Command
    │       │   └── LintCommand.php
    │       ├── Dumper.php
    │       ├── Escaper.php
    │       ├── Exception
    │       │   ├── DumpException.php
    │       │   ├── ExceptionInterface.php
    │       │   ├── ParseException.php
    │       │   └── RuntimeException.php
    │       ├── Inline.php
    │       ├── LICENSE
    │       ├── Parser.php
    │       ├── README.md
    │       ├── Tag
    │       │   └── TaggedValue.php
    │       ├── Tests
    │       │   ├── Command
    │       │   │   └── LintCommandTest.php
    │       │   ├── DumperTest.php
    │       │   ├── Fixtures
    │       │   │   ├── YtsAnchorAlias.yml
    │       │   │   ├── YtsBasicTests.yml
    │       │   │   ├── YtsBlockMapping.yml
    │       │   │   ├── YtsDocumentSeparator.yml
    │       │   │   ├── YtsErrorTests.yml
    │       │   │   ├── YtsFlowCollections.yml
    │       │   │   ├── YtsFoldedScalars.yml
    │       │   │   ├── YtsNullsAndEmpties.yml
    │       │   │   ├── YtsSpecificationExamples.yml
    │       │   │   ├── YtsTypeTransfers.yml
    │       │   │   ├── arrow.gif
    │       │   │   ├── booleanMappingKeys.yml
    │       │   │   ├── embededPhp.yml
    │       │   │   ├── escapedCharacters.yml
    │       │   │   ├── index.yml
    │       │   │   ├── multiple_lines_as_literal_block.yml
    │       │   │   ├── multiple_lines_as_literal_block_leading_space_in_first_line.yml
    │       │   │   ├── nonStringKeys.yml
    │       │   │   ├── not_readable.yml
    │       │   │   ├── nullMappingKey.yml
    │       │   │   ├── numericMappingKeys.yml
    │       │   │   ├── sfComments.yml
    │       │   │   ├── sfCompact.yml
    │       │   │   ├── sfMergeKey.yml
    │       │   │   ├── sfObjects.yml
    │       │   │   ├── sfQuotes.yml
    │       │   │   ├── sfTests.yml
    │       │   │   └── unindentedCollections.yml
    │       │   ├── InlineTest.php
    │       │   ├── ParseExceptionTest.php
    │       │   ├── ParserTest.php
    │       │   └── YamlTest.php
    │       ├── Unescaper.php
    │       ├── Yaml.php
    │       ├── composer.json
    │       └── phpunit.xml.dist
    └── webmozart
        └── assert
            ├── CHANGELOG.md
            ├── LICENSE
            ├── README.md
            ├── composer.json
            └── src
                └── Assert.php

431 directories, 2227 files
```

## Contact

If any quetion & request, please contact following infomation

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | [@nguyenanhung](https://fb.com/nguyenanhung) |

