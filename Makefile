.PHONY: help
help: ## Show this help message
	# adapted from https://gist.github.com/prwhite/8168133#gistcomment-3624253
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage: make [target]\n\nTargets:\n  \033[36m\033[0m\n"} /^[$$()% a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } ' $(MAKEFILE_LIST)

run: ## runs the app
	php -S localhost:8080
